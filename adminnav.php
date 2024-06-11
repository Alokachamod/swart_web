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
        <title>Admin Panel | SWART INDUSTRIES</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="icon" href="resources\profile for swart.jpg">
    </head>

    <body>

        <header class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="mr-auto navbar-nav offset-2">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="usermanage.php">User Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Project Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Chat</a>
                    </li>
                </ul>
                <span class="navbar-text offset-1">
                    Welcome, <h4 id="username"><?php echo $_SESSION["au"]["fname"]; ?></h4>
                </span>
            </div>
        </header>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bskAUcGYLNBzUHbsjoXBw4b4+alvE4Eb4Vs+huljiskcU7yqkMKnxuogbIz9PPv9b7E" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/your_fontawesome_kit_code.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
    </body>

    </html>

<?php
} else {
    echo ("You are Not a valid user");
}
?>
    echo ("You are Not a valid user");
}
?>