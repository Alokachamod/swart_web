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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    </head>

    <body class="adminBody" onload="loadUser();">
        <div class="tba">
            <span class="text-center text-light navbar-text ">
                <p class="ant">Welcome, <?php echo $_SESSION["au"]["fname"]; ?></p>
            </span>
        </div>
        <?php
        include "adminnav.php"
        ?>
        <div class="container mt-5">
            <div class="mb-4 d-flex justify-content-between align-items-center">
                <h2 class="text-light">Manage Users</h2>
                <button class="btn btn-primary">Add User</button>
            </div>
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">PROFILE PICTURE</th>
                            <th scope="col">NAME</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">MOBILE</th>
                            <th scope="col">JOINED DATE</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <?php

                    $query = "SELECT * FROM `user`";
                    $pageno;

                    if (isset($_GET["page"])) {
                        $pageno = $_GET["page"];
                    } else {
                        $pageno = 1;
                    }

                    $user_rs = Database::search($query);
                    $user_num = $user_rs->num_rows;

                    $results_per_page = 16;
                    $number_of_pages = ceil($user_num / $results_per_page);

                    $page_results = ($pageno - 1) * $results_per_page;
                    $selected_rs =  Database::search($query . " LIMIT " . $results_per_page . " OFFSET " . $page_results . "");

                    $selected_num = $selected_rs->num_rows;

                    for ($x = 0; $x < $selected_num; $x++) {
                        $selected_data = $selected_rs->fetch_assoc();

                        $img_rs = Database::search("SELECT * FROM `user_img` WHERE `user_email` = '" . $selected_data["email"] . "' ");
                        $img_data = $img_rs->fetch_assoc();

                    ?>
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <?php

                                    if (empty($img_data["path"])) {
                                    ?>

                                        <img src="resources\profile_pic.png" class="rounded-circle" style="height: 40px; margin-left: 80px;" />


                                    <?php

                                    } else {
                                    ?>

                                        <img src="<?php echo ($img_data["path"]); ?>" class="rounded-circle" style="height: 40px; margin-left: 80px;" />

                                    <?php
                                    }


                                    ?>
                                </td>
                                <td><?php echo $selected_data["fname"] . "" . $selected_data["lname"] ?></td>
                                <td><?php echo $selected_data["email"] ?></td>
                                <td><?php echo $selected_data["mobile"] ?></td>
                                <td><?php echo $selected_data["joined_date"] ?></td>
                                <td> <?php

                                        if ($selected_data["status_id"] == "1") {

                                        ?>

                                        <button class="btn btn-danger" id="ub<?php echo ($selected_data['email']); ?>" onclick="blockUser('<?php echo ($selected_data['email']); ?>');">Block</button>

                                    <?php

                                        } else {

                                    ?>

                                        <button class="btn btn-success" id="ub<?php echo ($selected_data['email']); ?>" onclick="blockUser('<?php echo ($selected_data['email']); ?>');">Unblock</button>

                                    <?php

                                        }


                                    ?>
                                </td>
                            </tr>
                            
                        </tbody>
                </table>
            <?php

                    }

            ?>
            <!--pegination-->
                <div class="containerum">
                    <ul class="pagination">
                        <li>
                            <a href="<?php if ($pageno <= 1) {
                                            echo ("#");
                                        } else {
                                            echo ("manageUsers.php?page=" . $pageno - 1);
                                        }
                                        ?>" aria-label="Previous"">Prev</a>
                        </li>
                        
                        <?php

                        for ($x = 1; $x <= $number_of_pages; $x++) {
                            if ($x == $pageno) {
                        ?>
                                <li>
                                    <a href="<?php echo "manageUsers.php?page=" . ($x) ?>"><?php echo $x; ?></a>
                                </li>
                            <?php
                            } else {
                            ?>
                                <li >
                                    <a href="<?php echo "manageUsers.php?page=" . ($x) ?>"><?php echo $x; ?></a>
                                </li>
                        <?php
                            }
                        }

                        ?>
                        
                        <li>
                            <a href="<?php if ($pageno >= $number_of_pages) {
                                                                echo ("#");
                                                            } else {
                                                                echo "manageUsers.php?page=" . ($pageno + 1);
                                                            } ?>">Next</a>
                        </li>
                    </ul>
                </div>
            </div>


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