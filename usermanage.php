<?php

session_start();

include "connection.php";

if (isset($_SESSION["au"])) {
    $data = $_SESSION["au"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swart industries</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container-fluid">
<span class="navbar-text offset-1">
                    Welcome, <h4 id="username"><?php echo $_SESSION["au"]["fname"]; ?></h4>
                </span>
</div>
<?php
include "adminnav.php"
?>
 <div class="container mt-5">
        <div class="mb-4 d-flex justify-content-between align-items-center">
            <h2>Manage Users</h2>
            <button class="btn btn-primary">Add User</button>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">NAME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ROLE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="avatar1.png" class="mr-2 rounded-circle" alt="Avatar" width="40">
                            <div>
                                <strong>Grant Siders</strong> <span class="text-muted">(you)</span>
                            </div>
                        </div>
                    </td>
                    <td>gsiders@heliacare.com</td>
                    <td>Super Admin</td>
                </tr>
                
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Back</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>

<?php
} else {
    echo ("You are Not a valid user");
}
?>