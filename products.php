<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="resources\swart new logo                           S.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">

</head>

<body class="bg-dark">
    <?php include "header.php"; ?>
    <div class="container-fluid">
        <div class="col-12">
            <div class="text-center uch 3">Products</div>
            <div class="d-lg-flex">
                <div class="mb-3 col-12">
                    <div class="border row border-primary">

                        <div class="col-12">
                            <div class="gap-2 row justify-content-center">

                                <?php

                                $product_rs = Database::search("SELECT * FROM `product` WHERE `category_id`='" . $cdata["id"] . "' AND `status_id`='1' ORDER BY `datetime_added` DESC LIMIT 4 OFFSET 0");
                                $product_num = $product_rs->num_rows;

                                for ($z = 0; $z < $product_num; $z++) {
                                    $product_data = $product_rs->fetch_assoc();

                                ?>

                                    <div class="mt-2 mb-2 card col-6 col-lg-2" style="width: 18rem;">

                                        <?php

                                        $image_rs = Database::search("SELECT * FROM `images` WHERE `product_id`='" . $product_data["id"] . "'");
                                        $image_data = $image_rs->fetch_assoc();

                                        ?>

                                        <img src="<?php echo $image_data["code"]; ?>" class="mt-2 card-img-top img-thumbnail" style="height: 180px;" />
                                        <div class="m-0 text-center card-body ms-0">
                                            <h5 class="card-title fs-6 fw-bold"><?php echo $product_data["title"]; ?>
                                                <span class="badge bg-info">New</span>
                                            </h5>
                                            <span class="card-text text-primary">Rs. <?php echo $product_data["price"]; ?> .00</span> <br />

                                            <?php

                                            if ($product_data["qty"] > 0) {

                                            ?>

                                                <span class="card-text text-warning fw-bold">In Stock</span><br />
                                                <span class="card-text text-success fw-bold"><?php echo $product_data["qty"]; ?> Items Available</span><br /><br />
                                                <a href='<?php echo "singleProductView.php?id=" . ($product_data["id"]); ?>' class="col-12 btn btn-success">Buy Now</a>
                                                <button class="mt-2 col-12 btn btn-danger" onclick="addToCart(<?php echo $product_data['id']; ?>);">
                                                    <i class="text-white bi bi-cart-plus-fill fs-5"></i>
                                                </button>
                                            <?php

                                            } else {

                                            ?>

                                                <span class="card-text text-danger fw-bold">Out of Stock</span> <br />
                                                <span class="card-text text-danger fw-bold">00 Items Available</span><br /><br />
                                                <button class="col-12 btn btn-success disabled">Buy Now</button>
                                                <button class="mt-2 col-12 btn btn-danger disabled">Add to Cart</button>

                                            <?php

                                            }

                                            $watchlist_rs = Database::search("SELECT * FROM `watchlist` WHERE `product_id`='" . $product_data["id"] . "' AND `user_email`='" . $_SESSION["u"]["email"] . "'");
                                            $watchlist_num = $watchlist_rs->num_rows;

                                            if ($watchlist_num == 1) {
                                            ?>
                                                <button class="mt-2 border col-12 btn btn-outline-light border-info" onclick='addToWatchlist(<?php echo $product_data["id"]; ?>)'>
                                                    <i class="bi bi-heart-fill text-danger fs-5" id='heart<?php echo $product_data["id"]; ?>'></i>
                                                </button>

                                            <?php
                                            } else {
                                            ?>
                                                <button class="mt-2 border col-12 btn btn-outline-light border-info" onclick='addToWatchlist(<?php echo $product_data["id"]; ?>)'>
                                                    <i class="bi bi-heart-fill text-dark fs-5" id='heart<?php echo $product_data["id"]; ?>'></i>
                                                </button>
                                            <?php
                                            }
                                            ?>


                                        </div>
                                    </div>

                                <?php

                                }

                                ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha388-iqQ80CjrKlQ1VpLN3FMxifQzLtOhwIWGEH2tIW7boqApr4vIWXOqDjlzBrvdZGUv" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>