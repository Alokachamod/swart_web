<?php
include "connection.php";
session_start();

if (isset($_SESSION['au'])) {
    $admin_id = $_SESSION['au'];

    $query = "SELECT fname FROM admin WHERE id = '$email'";
    $result = Database::search($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        echo $row['fname'];
    } else {
        echo "Admin not found";
    }
} else {
    echo "Not logged in";
}
