<?php

include "connection.php";



if (isset($_GET["id"])) {

    $pid = $_GET["id"];

    $product_rs = Database::search("SELECT*FROM `product` WHERE `id`='" . $pid . "'");

    $product_num = $product_rs->num_rows;

    if ($product_num == 1) {

        $product_data = $product_rs->fetch_assoc();

?>


        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $product_data['title']; ?> - Product Details</title>
            <link rel="stylesheet" href="style.css">
            <link rel="stylesheet" href="bootstrap.css">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        </head>

        <body class="upbody bg-dark">
            
            <div class="container-fluid">
                <?php
                include "header.php";
                ?>




                <div class="mt-0 bg-dark col-12 singleProduct">
                    <div class="row">
                        <div class="col-12 " style="padding: 10px;">
                            <div class="col-12 ">

                                <div id="carouselExampleSlidesOnly" class="carousel slide offset-4 " data-bs-ride="carousel">
                                    <div class="carousel-inner">

                                        <?php

                                        $image_rs = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $pid . "'");
                                        $image_num = $image_rs->num_rows;
                                        $img = array();

                                        if ($image_num != 0) {

                                            for ($x = 0; $x < $image_num; $x++) {
                                                $image_data = $image_rs->fetch_assoc();
                                                $img[$x] = $image_data["path"];
                                        ?>

                                                <div class="carousel-item active">
                                                    <img src="<?php echo $img["$x"]; ?>" class="d-block " style="width: 30vw;">
                                                </div>

                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <li class="mb-1 d-flex flex-column justify-content-center align-items-center ">
                                                <img src="resources\emptyimg.png" class="mt-1 mb-1 img-thumbnail" />
                                            </li>
                                            <li class="mb-1 d-flex flex-column justify-content-center align-items-center ">
                                                <img src="resources\emptyimg.png" class="mt-1 mb-1 img-thumbnail" />
                                            </li>
                                            <li class="mb-1 d-flex flex-column justify-content-center align-items-center ">
                                                <img src="resources\emptyimg.png" class="mt-1 mb-1 img-thumbnail" />
                                            </li>
                                        <?php
                                        }

                                        ?>

                                    </div>
                                </div>

                                <div class="offset-3 col-8 col-md-10">
                                    <div>
                                        <h2 class="text-white offset-lg-1"><?php echo $product_data["title"]; ?></h2>
                                    </div>
                                    <br>
                                    <div class="text-center text-white col-6">
                                        <p><?php echo $product_data["description"]; ?></p>
                                    </div>
                                    <div class="inline-flex text-white justify-item-center align-items-center d-flex offset-1">
                                        <div class="text-center d-flex">
                                            <div>
                                                <p>Qty : </p>
                                            </div>
                                            <br>
                                            <div class=""><?php echo $product_data["qty"]; ?></div>
                                        </div class>
                                        <div class="m-5 "><?php

                                                            if ($product_data["availability_id"] == 1) {
                                                            ?>
                                                <div class="pis">In Stock</div>
                                            <?php
                                                            } else {
                                            ?>
                                                <div class="pos">Out Of Stock</div>
                                            <?php
                                                            }

                                            ?>
                                        </div>

                                    </div>
                                    <div class="col-lg-6 offset-1 d-flex">

                                        <button class="bb">
                                            <span class="bs">Buy</span>
                                        </button>

                                        <button class="bb">
                                            <span class="bs">Add to Cart</span>
                                        </button>

                                        <button class="bb">
                                            <span class="bs"><span class="material-symbols-outlined">
                                                    favorite
                                                </span>
                                            </span>
                                        </button>

                                    </div>
                                </div>



                            </div>
                        </div>



                    </div>
                </div>

            </div>
            </div>

            <?php include "footer.php"; ?>
            </div>
            </div>

            <script src="bootstrap.bundle.js"></script>
            <script src="script.js"></script>
            <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
        </body>

        </html>

<?php

    } else {
        echo ("Sory for the inconvinient");
    }
} else {
    echo ("Something went wrong");
}

?>