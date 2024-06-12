<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Profile |swart industries</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

    <link rel="icon" href="resource/logo.svg" />
</head>

<body class="bg-dark">


    <div class="container-fluid">

        <div class="row">
            <?php
            include "header.php";
            
            include "connection.php";

            if (isset($_SESSION["u"])) {

                $email = $_SESSION["u"]["email"];

                $details_rs = Database::search("SELECT * FROM `user`");

                $image_rs = Database::search("SELECT * FROM `user_img` WHERE `user_email`='" . $email . "'");

                $address_rs = Database::search("SELECT * FROM `user_has_address` INNER JOIN `city` ON user_has_address.city_id=city.id INNER JOIN `district` ON city.district_id=district.id INNER JOIN `province` ON district.province_id=province.id WHERE `user_email`='" . $email . "'");
                
                $data = $details_rs->fetch_assoc();
                $image_data = $image_rs->fetch_assoc();
                $address_data = $address_rs->fetch_assoc();


                            ?>

<div class="col-12">

<div class="bg-center col-12">
    <div class="p-4 text-center text-white uph"> User Profile </div>
    <div>
        <div class="col-12">
            <div class="upi">
                <?php

                if (empty($image_data["path"])) {

                ?>
                    <img src="resources\profile_pic.png" class="rounded-circle" style="width: 150px;" id="viewImg" />
                <?php

                } else {

                ?>
                    <img src="<?php echo $image_data["path"]; ?>" class="rounded-circle" style="width: 150px;" id="viewImg" />
                <?php

                }

                ?>


                <div>
                    <input type="file" class="d-none" id="profileimg" accept="image/*" />
                    <label for="profileimg" class="mt-5 btn upci" onclick="changeImage();">Change Image</label>
                </div>

            </div>
            <div class="container">
                <div class="p-4 row justify-content-center">
                    <div class="col-md-6">
                        <div class="card futuristic-card">
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label for="firstName" class="text-light">First Name</label>
                                        <input type="text" class="form-control" id="fname"  value="<?php echo $data["fname"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName" class="text-light">Last Name</label>
                                        <input type="text" class="form-control" id="lname"  value="<?php echo $data["lname"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile" class="text-light">Mobile</label>
                                        <input type="tel" class="form-control" id="mobile"  value="<?php echo $data["mobile"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-light">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control text-dark" id="password"  readonly value="<?php echo $data["password"]; ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="showPasswordup">Show</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="text-light">Email</label>
                                        <input type="email" class="form-control text-dark" id="email"  readonly value="<?php echo $data["email"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="registeredDate" class="text-light">Registered Date</label>
                                        <input type="text" class="form-control text-dark" id="joined_date" readonly value="<?php echo $data["joined_date"]; ?>">
                                    </div>
                                    
                                    <?php

                                            if (!empty($address_data["line1"])) {

                                            ?>
                                    
                                    <div class="form-group">
                                        <label for="addressLine1" class="text-light">Address Line 1</label>
                                        <input type="text" class="form-control" id="line1" value="<?php echo $address_data["line1"]; ?>">
                                    </div>
                                    
                                    <?php

                                            } else {
                                            ?>
                                            <div class="form-group">
                                        <label for="addressLine1" class="text-light">Address Line 1</label>
                                        <input type="text" class="form-control" id="line1">
                                    </div>
                                            <?php
                                            }

                                            if (!empty($address_data["line2"])) {

                                            ?>
                                    <div class="form-group">
                                        <label for="addressLine2" class="text-light">Address Line 2</label>
                                        <input type="text" class="form-control" id="line2" value="<?php echo $address_data["line2"]; ?>">
                                    </div>
                                    <?php

                                            } else {
                                            ?>
                                                <div class="form-group">
                                        <label for="addressLine2" class="text-light">Address Line 2</label>
                                        <input type="text" class="form-control" id="line2" >
                                    </div>
                                            
                                            <?php
                                            }

                                            $province_rs = Database::search("SELECT * FROM `province`");
                                            $district_rs = Database::search("SELECT * FROM `district`");
                                            ?>
                                    <div class="form-group">
                                        <label for="province" class="text-light">Province</label>
                                        <select class="form-control" id="province">
                                            <option value="0">Select Province</option>
                                            <?php
                                                    $province_num = $province_rs->num_rows;
                                                    for ($x = 0; $x < $province_num; $x++) {
                                                        $province_data = $province_rs->fetch_assoc();
                                                    ?>
                                                        <option value="<?php echo $province_data["id"]; ?>" <?php
                                                                                                            if (!empty($address_data["province_id"])) {

                                                                                                                if ($province_data["id"] == $address_data["province_id"]) {
                                                                                                            ?>selected<?php
                                                                                                                    }
                                                                                                                }

                                                                                                                        ?>><?php echo $province_data["province"]; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="district" class="text-light">District</label>
                                        <select class="form-control" id="district">
                                            <option value="0">Select District</option>
                                            <?php
                                                    $district_num = $district_rs->num_rows;
                                                    for ($x = 0; $x < $district_num; $x++) {
                                                        $district_data = $district_rs->fetch_assoc();
                                                    ?>
                                                        <option value="<?php echo $district_data["id"]; ?>" <?php
                                                                                                            if (!empty($address_data["district_id"])) {
                                                                                                                if ($district_data["id"] == $address_data["district_id"]) {
                                                                                                            ?>selected<?php
                                                                                                                    }
                                                                                                                }
                                                                                                                        ?>><?php echo $district_data["district"]; ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="city" class="text-light">City</label>
                                        <select class="form-control " class="text-light" id="city">
                                            <option value="">Select City</option>
                                            <?php
                                                    $city_rs = Database::search("SELECT * FROM `city`");
                                                    $city_num = $city_rs->num_rows;
                                                    for ($x = 0; $x < $city_num; $x++) {
                                                        $city_data = $city_rs->fetch_assoc();
                                                    ?>
                                                        <option value="<?php echo $city_data["id"]; ?>" <?php
                                                                                                        if (!empty($address_data["city_id"])) {
                                                                                                            if ($city_data["id"] == $address_data["city_id"]) {
                                                                                                        ?>selected<?php
                                                                                                                }
                                                                                                            }
                                                                                                                    ?>><?php echo $city_data["city"]; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                        </select>
                                    </div>
                                    <?php

                                            if (!empty($address_data["postal_code"])) {
                                            ?>
                                    <div class="p-3 form-group">
                                        <label for="postalCode" class="text-light">Postal Code</label>
                                        <input type="text" class="form-control" id="pcode" value="<?php echo $address_data["postal_code"]; ?>">
                                    </div>
                                    <?php
                                            } else {
                                            ?>
                                            <div class="p-3 form-group">
                                        <label for="postalCode" class="text-light">Postal Code</label>
                                        <input type="text" class="form-control" id="postalCode" >
                                    </div>
                                            <?php
                                            }

                                            ?>
                                    <div class="text-center col-12">
                                        <button type="button" class="upsb" onclick="userProfileUpdate();">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

            <?php
            } else {
                ?>
                <script>
                    alert("You have a not account. please sign up or sign in first.");
                    window.location.href = "sign.php";
                </script>
                <?php
            }
            ?>
            
        </div>
    </div>


    <?php include "footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bskAUcGYLNBzUHbsjoXBw4b4+alvE4Eb4Vs+huljiskcU7yqkMKnxuogbIz9PPv9b7E" crossorigin="anonymous"></script>"></script>
    <script src="script.js"></script>
</body>

</html>