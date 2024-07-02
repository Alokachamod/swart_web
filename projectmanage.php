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
        <title>Products</title>
        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="resources\swart new logo                           S.png">
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
        <?php include "adminnav.php"; ?>
        <div class="container mt-5">
            <div class="mb-4 d-flex justify-content-between align-items-center">
                <h2 class="text-light">Manage product</h2>
                <div>
                    <button class="pmbutton" onclick="aprmodelb();"> Add Product</button>
                </div>
                <div class="modal" tabindex="-1" id="aprmodel">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <label for="form-label fw-bold ">Title</label>
                                    <input type="text" class="form-control" id="title">
                                </div>
                                <div>
                                    <div class="col-12">
                                        <label class="form-label ">Description</label>
                                    </div>
                                    <div class="col-12">
                                        <textarea cols="30" rows="15" class="form-control" id="desc"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <label for="form-label fw-bold ">Price</label>
                                    <input type="text" class="form-control" id="price">
                                </div>
                                <div>
                                    <label for="form-label fw-bold ">Qty</label>
                                    <input type="text" class="form-control" id="qty">
                                </div>
                                <div>
                                    <label for="form-label fw-bold ">Images</label>
                                    <div class="offset-lg-3 col-12 col-lg-6">
                                        <div class="row">
                                            <div class="rounded col-4">
                                                <img src="resources\photo.png" class="img-fluid" style="height: 70px;" id="i0" />
                                            </div>
                                            <div class="rounded col-4">
                                                <img src="resources\photo.png" class="img-fluid" style="height: 70px;" id="i1" />
                                            </div>
                                            <div class="rounded col-4">
                                                <img src="resources\photo.png" class="img-fluid" style="height: 70px;" id="i2" />
                                                <div class="col-12 ">
                                                    <input type="file" class="d-none" id="imageuploader" multiple />
                                                    <label for="imageuploader" class="m-2 apbtn " onclick="changeProductImage();">Upload Images</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="addProduct();">Add Product</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 d-flex">
                <div class="searchpm">
                    <div class="search-boxpm col-6">
                        <div class="search-fieldpm">
                            <input placeholder="Search..." class="inputpm" type="text" id="pid">

                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <div>
                        <button class="pmbutton" onclick="apmodelu();"> Update</button>
                    </div>
                    <!--<div>
                        <button class="pmbutton" onclick="productDelete(ProductId);"> Delete</button>
                    </div>-->
                </div>
                <div class="modal" tabindex="-1" id="pupdate">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Product</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <label for="form-label fw-bold ">Title</label>
                                    <input type="text" class="form-control" id="titleu">
                                </div>
                                <div>
                                    <div class="col-12">
                                        <label class="form-label">Description</label>
                                    </div>
                                    <div class="col-12">
                                        <textarea cols="30" rows="15" class="form-control" id="descu"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <label for="form-label fw-bold ">Price</label>
                                    <input type="text" class="form-control" id="priceu">
                                </div>
                                <div>
                                    <label for="form-label fw-bold ">Qty</label>
                                    <input type="text" class="form-control" id="qtyu">
                                </div>
                                <div>
                                    <label for="form-label fw-bold ">Images</label>
                                    <div class="offset-lg-3 col-12 col-lg-6">
                                        <div class="row">
                                            <div class="rounded col-4">
                                                <img src="resources\photo.png" class="img-fluid" style="height: 70px;" id="i0u" />
                                            </div>
                                            <div class="rounded col-4">
                                                <img src="resources\photo.png" class="img-fluid" style="height: 70px;" id="i1u" />
                                            </div>
                                            <div class="rounded col-4">
                                                <img src="resources\photo.png" class="img-fluid" style="height: 70px;" id="i2u" />
                                                <div class="col-12 ">
                                                    <input type="file" class="d-none" id="imageuploaderu" multiple />
                                                    <label for="imageuploaderu" class="m-2 apbtn " onclick="updateProductImage();">Upload Images</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="uproduct();">Update Product</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="p-4">
                    <div class="d-flex">
                        <div scope="col" class="col-2 text-light">PRODUCT IMAGE</div>
                        <div scope="col" class="col-1 text-light ">PRODUCT ID</div>
                        <div scope="col" class="col-2 text-light offset-1">TITLE</div>
                        <div scope="col" class="col-4 text-light d-none d-lg-block">DESCRIPTION</div>
                        <div scope="col" class="col-1 text-light d-none d-lg-block">PRICE</div>
                        <div scope="col" class="col-1 text-light d-none d-lg-block">QTY</div>
                        <div scope="col" class="col-1 text-light d-none d-lg-block">AVAILABILITY</div>
                    </div>
                </div>
                <?php

                $query = "SELECT * FROM `product`";
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

                    $img_rs = Database::search("SELECT * FROM `images` WHERE `product_id` = '" . $selected_data["id"] . "' ");
                    $img_data = $img_rs->fetch_assoc();

                ?>

                    <div class="p-2 d-flex border-bottom">
                        <div class=" col-2">
                            <?php

                            if (empty($img_data["path"])) {
                            ?>

                                <img src="resources\empty image.png" class="rounded umt" style="height: 150px;  " />


                            <?php

                            } else {
                            ?>

                                <img src="<?php echo ($img_data["path"]); ?>" class="rounded umt" style="height: 150px;" />

                            <?php
                            }


                            ?>
                        </div>
                        <div class=" col-1 text-light"><?php echo $selected_data["id"] ?></div>
                        <div class=" col-2 text-light offset-1"><?php echo $selected_data["title"] ?></div>
                        <div class=" col-4 text-light d-none d-lg-block"><?php echo $selected_data["description"] ?></div>
                        <div class=" col-1 text-light d-none d-lg-block"><?php echo $selected_data["price"] ?></div>
                        <div class=" col-1 text-light d-none d-lg-block"><?php echo $selected_data["qty"] ?></div>
                        <div class=" col-1 text-light d-none d-lg-block"><?php echo $selected_data["availability_id"] ?></div>
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
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha388-iqQ80CjrKlQ1VpLN3FMxifQzLtOhwIWGEH2tIW7boqApr4vIWXOqDjlzBrvdZGUv" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>

    </html>

<?php
} else {
    echo ("You are Not a valid user");
}
?>