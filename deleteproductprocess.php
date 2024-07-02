<?php

include "connection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $productId = $_POST["productId"];

    // Perform the deletion logic here
    $deleteQuery = "DELETE FROM products WHERE id = ?";
    $stmt = Database::$connection->prepare($deleteQuery);
    $stmt->bind_param("i", $productId);

    if ($stmt->execute()) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . $stmt->error;
    }

    $stmt->close();

}
?>
