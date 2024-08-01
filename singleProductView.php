<?php

include "connection.php";



if (isset($_GET["id"])) {

    $pid = $_GET["id"];

    $product_rs = Database::search("SELECT*FROM `product` WHERE `id`='".$pid."'");

    $product_num = $product_rs->num_rows;

    if ($product_num == 1) {

        $product_data = $product_rs->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $product['name']; ?> - Product Details</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container-fluid">
<?php
include "header.php";
?>
                <div class="row">



                    <div class="mt-0 bg-dark col-12 singleProduct">
                        <div class="row">
                            <div class="col-12" style="padding: 10px;">
                                <div class="row">

                                    <div class="order-2 col-12 col-lg-2 order-lg-1">
                                        <ul>

                                            <?php

                                            $image_rs = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $pid . "'");
                                            $image_num = $image_rs->num_rows;
                                            $img = array();

                                            if ($image_num != 0) {

                                                for ($x = 0; $x < $image_num; $x++) {
                                                    $image_data = $image_rs->fetch_assoc();
                                                    $img[$x] = $image_data["path"];
                                            ?>

                                                    <li class="mb-1 d-flex flex-column justify-content-center align-items-center ">
                                                        <img src="<?php echo $img["$x"]; ?>" style="height: 200px;" class="mt-1 mb-1 img-thumbnail" id="productImg<?php echo $x; ?>" onclick="loadMainImg(<?php echo $x; ?>);" />
                                                    </li>

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

                                        </ul>
                                    </div>

                                    <div class="order-1 col-12 col-lg-10 order-lg-2">
                                            <div>
                                                <h2>Aloka</h2>
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