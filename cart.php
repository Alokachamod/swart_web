<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
</head>
<body class="bg-dark">
<div class="container-fluid">
        <div class="col-12">
            <div class="row">
    
                <?php include "header.php";
    
    
    
                if (isset($_SESSION["u"])) {
    
                    $email = $_SESSION["u"]["email"];
                    $total = 0;
                    $subTotal = 0;
                    $shipping = 0;
    
                ?>
    
                    <div class="m-4 mb-3 border rounded col-12 border-1 border-primary">
                        <div class="row">
    
                            <div class="col-12">
                                <label class="form-label fs-1 fw-bolder text-light">Cart <i class="bi bi-cart4 fs-1 text-success"></i></label>
                            </div>
    
                            <div class="col-12 col-lg-6">
                                <hr />
                            </div>
    
                            <div class="col-12">
                                <div class="row">
                                    <div class="mb-3 offset-lg-2 col-12 col-lg-6">
                                        <input type="text" class="form-control" placeholder="Search in Cart..." />
                                    </div>
                                    <div class="mb-3 col-12 col-lg-2 d-grid">
                                        <button class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-12 text-light">
                                <hr />
                            </div>
    
                            <?php
    
                            $cart_rs = Database::search("SELECT * FROM `cart` WHERE `user_email`='" . $email . "'");
                            $cart_num = $cart_rs->num_rows;
    
                            if ($cart_num == 0) {
    
                            ?>
                                <!-- Empty View -->
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 emptyCart"></div>
                                        <div class="mb-2 text-center col-12">
                                            <label class="form-label fs-1 fw-bold">
                                                You have no items in your Cart yet.
                                            </label>
                                        </div>
                                        <div class="mb-3 offset-lg-4 col-12 col-lg-4 d-grid">
                                            <a href="home.php" class="btn btn-outline-info fs-3 fw-bold">
                                                Start Shopping
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Empty View -->
                            <?php
    
                            } else {
                            ?>
    
                                <!-- products -->
                                <div class="col-12 col-lg-9">
                                    <div class="row">
    
                                        <?php
    
                                        for ($x = 0; $x < $cart_num; $x++) {
    
                                            $cart_data = $cart_rs->fetch_assoc();
                                            $pid = $cart_data["product_id"];
                                            $product_rs = Database::search("SELECT * FROM `product` WHERE `id` = '" . $pid . "' ");
                                            $product_data = $product_rs->fetch_assoc();
    
                                            $total = $total + ($product_data["price"] * $cart_data["qty"]);
    
                                            $seller_rs = Database::search("SELECT * FROM `user` WHERE `email` = '" . $product_data["user_email"] . "' ");
                                            $seller_data = $seller_rs->fetch_assoc();
                                            $seller = $seller_data["fname"] . " " . $seller_data["lname"];
    
                                            $address_rs = Database::search("SELECT district.id AS `did` FROM `user_has_address` INNER JOIN `city` ON user_has_address.city_id = city.id INNER JOIN `district` ON city.district_id = district.id WHERE `user_email` = '" . $email . "' ");
                                            $address_data = $address_rs->fetch_assoc();
    
                                            $ship = 0;
                                            if ($address_data["did"] == 1) {
    
                                                $ship = $product_data["delivery_fee_colombo"];
                                                $shipping = $shipping + $ship;
                                            } else {
    
                                                $ship = $product_data["delivery_fee_other"];
                                                $shipping = $shipping + $ship;
                                            }
    
    
                                            $img_rs = Database::search("SELECT * FROM `images` WHERE `product_id` = '" . $product_data["id"] . "' ");
                                            $img_data = $img_rs->fetch_assoc();
    
                                            $color_rs = Database::search("SELECT * FROM `colour` WHERE `id` = '" . $product_data["colour_id"] . "' ");
                                            $color_data = $color_rs->fetch_assoc();
    
                                            $condition = "0";
                                            if ($product_data["condition_id"] == "1") {
                                                $condition = "Brand New";
                                            } else if ($product_data["condition_id"] == "2") {
                                                $condition = "Used";
                                            }
    
                                            $subTotal = $subTotal + ($product_data["price"] * $cart_data["qty"]);
    
                                        ?>
    
                                            <div class="mx-0 mb-3 card col-12">
                                                <div class="row g-0">
                                                    <div class="mt-3 mb-3 col-md-12">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span class="fw-bold text-black-50 fs-5">Seller :</span>&nbsp;
                                                                <span class="text-black fw-bold fs-5"><?php echo $seller; ?></span>&nbsp;
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <hr>
    
                                                    <div class="col-md-4">
    
                                                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="<?php echo $product_data["description"]; ?>" title="Product Details">
                                                            <img src="<?php echo ($img_data["code"]); ?>" class="img-fluid rounded-start" style="max-width: 200px;">
                                                        </span>
    
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="card-body">
    
                                                            <h3 class="card-title"><?php echo ($product_data["title"]); ?></h3>
    
                                                            <span class="fw-bold text-black-50">Colour : <?php echo ($color_data["name"]); ?></span> &nbsp; |
    
                                                            &nbsp; <span class="fw-bold text-black-50">Condition : <?php echo ($condition); ?></span>
                                                            <br>
                                                            <span class="fw-bold text-black-50 fs-5">Price :</span>&nbsp;
                                                            <span class="text-black fw-bold fs-5">Rs.<?php echo ($product_data["price"]); ?>.00</span>
                                                            <br>
                                                            <span class="fw-bold text-black-50 fs-5">Quantity :</span>&nbsp;
                                                            <input type="number" class="px-3 mt-3 border border-2 border-secondary fs-4 fw-bold cardqtytext" value='<?php echo ($cart_data["qty"]); ?>' min="1">
                                                            <br><br>
                                                            <span class="fw-bold text-black-50 fs-5">Delivery Fee :</span>&nbsp;
                                                            <span class="text-black fw-bold fs-5">Rs.<?php echo ($ship); ?>.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="card-body d-grid">
                                                            <a href='<?php echo ("singleProductView.php?id=" . $product_data["id"]); ?>' class="mb-2 btn btn-outline-success">Buy Now</a>
                                                            <a class="mb-2 btn btn-outline-danger" onclick="deleteFromCart(<?php echo $cart_data['id']; ?>);">Remove</a>
                                                        </div>
                                                    </div>
    
                                                    <hr>
    
                                                    <div class="mt-3 mb-3 col-md-12">
                                                        <div class="row">
                                                            <div class="col-6 col-md-6">
                                                                <span class="fw-bold fs-5 text-black-50">Requested Total <i class="bi bi-info-circle"></i></span>
                                                            </div>
                                                            <div class="col-6 col-md-6 text-end">
                                                                <span class="fw-bold fs-5 text-black-50">Rs.<?php echo ($product_data["price"] * $cart_data["qty"]) + $ship; ?>.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                        <?php
    
                                        }
    
                                        ?>
    
    
    
    
                                    </div>
                                </div>
                                <!-- products -->
    
                                <!-- summary -->
                                <div class="col-12 col-lg-3">
                                    <div class="row">
    
                                        <div class="col-12">
                                            <label class="form-label fs-3 fw-bold">Summary</label>
                                        </div>
    
                                        <div class="col-12">
                                            <hr />
                                        </div>
    
                                        <div class="mb-3 col-6">
                                            <span class="fs-6 fw-bold">items (<?php echo ($cart_num); ?>)</span>
                                        </div>
    
                                        <div class="mb-3 col-6 text-end">
                                            <span class="fs-6 fw-bold">Rs.<?php echo ($subTotal); ?>.00</span>
                                        </div>
    
                                        <div class="col-6">
                                            <span class="fs-6 fw-bold">Shipping</span>
                                        </div>
    
                                        <div class="col-6 text-end">
                                            <span class="fs-6 fw-bold"><?php echo ($shipping); ?></span>
                                        </div>
    
                                        <div class="mt-3 col-12">
                                            <hr />
                                        </div>
    
                                        <div class="mt-2 col-6">
                                            <span class="fs-4 fw-bold">Total</span>
                                        </div>
    
                                        <div class="mt-2 col-6 text-end">
                                            <span class="fs-4 fw-bold"><?php echo ($subTotal + $shipping); ?></span>
                                        </div>
    
                                        <div class="mt-3 mb-3 col-12 d-grid">
                                            <button class="btn btn-primary fs-5 fw-bold">CHECKOUT</button>
                                        </div>
    
                                    </div>
                                </div>
    
                                <!-- summary -->
    
                            <?php
                            }
    
                            ?>
    
    
    
    
    
                        </div>
                    </div>
    
                <?php
    
                } else {
                    echo ("Please Sign In or Register");
                }
    
                include "footer.php";
    
                ?>
    
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    <script>
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
</body>
</html>