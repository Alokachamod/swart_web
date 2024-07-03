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
    <title>Admin panel | SWART INDUSTRIES</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" href="resources\swart new logo                           S.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body class="adminBody">
    
            <div class="tba">
            <span class="text-center text-light navbar-text " >
                <p class="ant">Welcome, <?php echo $_SESSION["au"]["fname"]; ?></p>
            </span>
            </div>
        
    <?php include "adminnav.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Users</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group" id="userList">
                            <!-- Users will be dynamically loaded here -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Chat Box</h5>
                    </div>
                    <div class="card-body" id="chatBox">
                        <!-- Chat messages will be dynamically loaded here -->
                    </div>
                    <div class="card-footer">
                        <form id="messageForm">
                            <div class="input-group">
                                <input type="text" class="form-control" id="messageInput" placeholder="Type your message...">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chat Box Modal -->
    <div class="modal fade" id="chatModal" tabindex="-1" aria-labelledby="chatModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chatModalLabel">Chat with <span id="chatUserName"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="chatModalBody">
                    <!-- Chat messages will be dynamically loaded here -->
                </div>
                <div class="modal-footer">
                    <form id="modalMessageForm">
                        <div class="input-group">
                            <input type="text" class="form-control" id="modalMessageInput" placeholder="Type your message...">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    
</body>

</html>

<?php
} else {
    echo ("You are Not a valid user");
}
?>