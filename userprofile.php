<?php
include "connection.php";
?>
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

    <link rel="icon" href="resource/logo.svg" />
</head>

<body class="bg-dark">

    <?php
    include "header.php";
    ?>

    <div class="container-fluid">
        <div class="col-12">
            <div class="row">
                <div class="bg-center col-12">
                    <div class="text-center text-white uph"> User Profile </div>
                    <div>
                        <div class="col-12">
                            <div class="upi">
                                <img src="resources\profile_pic.png" class="rounded-circle" style="height: 150px;">
                                <div>
                                    <button class="upci">
                                        Change Image
                                    </button>
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
                                                        <input type="text" class="form-control" id="firstName" placeholder="Enter your first name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="lastName" class="text-light">Last Name</label>
                                                        <input type="text" class="form-control" id="lastName" placeholder="Enter your last name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="mobile" class="text-light">Mobile</label>
                                                        <input type="tel" class="form-control" id="mobile" placeholder="Enter your mobile number">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="text-light">Password</label>
                                                        <div class="input-group">
                                                            <input type="password" class="form-control" id="password" placeholder="Enter your password">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-secondary" type="button" id="showPassword">Show</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" class="text-light">Email</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="registeredDate" class="text-light">Registered Date</label>
                                                        <input type="date" class="form-control" id="registeredDate">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="addressLine1" class="text-light">Address Line 1</label>
                                                        <input type="text" class="form-control" id="addressLine1" placeholder="Enter your address line 1">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="addressLine2" class="text-light">Address Line 2</label>
                                                        <input type="text" class="form-control" id="addressLine2" placeholder="Enter your address line 2">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="province" class="text-light">Province</label>
                                                        <select class="form-control" id="province">
                                                            <option value="">Select Province</option>
                                                            <!-- Add options for provinces here -->
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="district" class="text-light">District</label>
                                                        <select class="form-control" id="district">
                                                            <option value="">Select District</option>
                                                            <!-- Add options for districts here -->
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="city">City</label>
                                                        <select class="form-control " class="text-light" id="city">
                                                            <option value="">Select City</option>
                                                            <!-- Add options for cities here -->
                                                        </select>
                                                    </div>
                                                    <div class="p-3 form-group">
                                                        <label for="postalCode" class="text-light">Postal Code</label>
                                                        <input type="text" class="form-control" id="postalCode" placeholder="Enter your postal code">
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
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
        </div>
    </div>


    <?php include "footer.php"; ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bskAUcGYLNBzUHbsjoXBw4b4+alvE4Eb4Vs+huljiskcU7yqkMKnxuogbIz9PPv9b7E" crossorigin="anonymous"></script>"></script>
    <script src="script.js"></script>
</body>

</html>