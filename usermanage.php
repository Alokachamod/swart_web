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

    <body class="adminBody">
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

            </div>
            <div>
                <div>
                    <div class="p-4">
                        <div class="d-flex">
                            <div scope="col" class="py-2 col-2 text-light"><span>PROFILE PICTURE</span></div>
                            <div scope="col" class="py-2 col-2 text-light"><span>NAME</span></div>
                            <div scope="col" class="col-3 text-light d-none d-lg-block"><span>EMAIL</span></div>
                            <div scope="col" class="col-1 text-light d-none d-lg-block"><span>MOBILE</span></div>
                            <div scope="col" class="col-2 text-light d-none d-lg-block">JOINED DATE</div>
                            <div scope="col" class="col-2 text-light p-lg-4"><span>action</span></div>
                        </div>
                    </div>
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

                        <div class="py-2 d-flex border-bottom">
                            <div class=" col-2" >
                                <?php

                                if (empty($img_data["path"])) {
                                ?>

                                    <img src="resources\profile_pic.png" class="rounded-circle umt" style="height: 40px;  " />


                                <?php

                                } else {
                                ?>

                                    <img src="<?php echo ($img_data["path"]); ?>" class="rounded-circle umt" style="height: 40px;"  />

                                <?php
                                }


                                ?>
                            </div>
                            <div class=" col-2 text-light" ><span><?php echo $selected_data["fname"] . "  " . $selected_data["lname"] ?></span></div>
                            <div class="py-2 col-3 text-light d-none d-lg-block"><span><?php echo $selected_data["email"] ?></span></div>
                            <div class="py-2 col-1 text-light d-none d-lg-block"><span><?php echo $selected_data["mobile"] ?></span></div>
                            <div class="py-2 col-2 text-light d-none d-lg-block"><span><?php echo $selected_data["joined_date"] ?></span></div>
                            <div class=" col-2 text-light"> <?php

                                                            if ($selected_data["status_id"] == "1") {

                                                            ?>

                                    <button class="m-0 btn btn-danger" id="ub<?php echo ($selected_data['email']); ?>" onclick="blockUser('<?php echo ($selected_data['email']); ?>');">Block</button>

                                <?php

                                                            } else {

                                ?>

                                    <button class="btn btn-success" id="ub<?php echo ($selected_data['email']); ?>" onclick="blockUser('<?php echo ($selected_data['email']); ?>');">Unblock</button>

                                <?php

                                                            }


                                ?>
                            </div>
                            <div class=" col-2 text-light"> <?php

                                                            if ($selected_data["status_id"] == "1") {

                                                            ?>

                                    <button class="btn btn-danger" id="ud<?php echo ($selected_data['email']); ?>" onclick="userDelete('<?php echo ($selected_data['email']); ?>');">Kick</button>

                                <?php
                                        } else
                                ?>
                            </div>
                        </div>

                </div>

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
                                        echo ("usermanage.php?page=" . $pageno - 1);
                                    }
                                    ?>" aria-label="Previous"">Prev</a>
                        </li>
                        
                        <?php

                        for ($x = 1; $x <= $number_of_pages; $x++) {
                            if ($x == $pageno) {
                        ?>
                                <li>
                                    <a href=" <?php echo "usermanage.php?page=" . ($x) ?>"><?php echo $x; ?></a>
                    </li>
                <?php
                            } else {
                ?>
                    <li>
                        <a href="<?php echo "usermanage.php?page=" . ($x) ?>"><?php echo $x; ?></a>
                    </li>
            <?php
                            }
                        }

            ?>

            <li>
                <a href="<?php if ($pageno >= $number_of_pages) {
                                echo ("#");
                            } else {
                                echo "usermanage.php?page=" . ($pageno + 1);
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