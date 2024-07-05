<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWART INDUSTRIES</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="resources\swart new logo                           S.png">
</head>

<body class="bg-secondary">
    <div class="container-fluid">
        <div class="col-12">

            <div>
                <?php
                session_start();
                if (isset($_SESSION["u"])) {
                    $data = $_SESSION["u"];
                ?>
                    <span class="text-Ig-start text-success"><b>Hi </b><?php echo $data["fname"]; ?></span> |
                    <span class="text-lg-start fw-bold text-danger signout" onclick="signout();">Signout</span> |
                <?php
                } else {
                ?>
                    <a href="sign.php" class="text-decoration-none fw-bold">Sign In or Register</a>
                <?php
                }
                ?>
                <span class="text-lg-start text-light fw-bold">| Help and Contact</span>
            </div>


            <nav class="navbar navbar-expand-lg bg-secondary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img src="resources\swart new logo s.png" alt="SWART INDUSTRIES" class="img-fluid" style="height: 70px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="text-white nav-link hover-underline" aria-current="page" href="upcomingprojects.php">Upcoming Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-white nav-link hover-underline" href="product.php">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-white nav-link hover-underline" href="services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-white nav-link hover-underline" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-white nav-link hover-underline" href="#">Contact Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="text-white nav-link hover-underline dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    My Account
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item text-dark" href="userprofile.php">My Profile</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Cart</a></li>
                                    <li><a class="dropdown-item text-dark" href="#">Wish List</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>


        </div>
    </div>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
