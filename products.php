<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="resources\profile for swart.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
</head>

<body class="bg-dark">
    <?php include "header.php"; ?>
    <div class="container-fluid">
        <div class="col-12">
            <div class="uch text-center">Products</div>
            <div class="d-flex">
                <div class="col-md-4 col-sm-6 col-12 mb-3">
                    <div class="card h-100 shadow-sm">
                        <img src="placeholder.jpg" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Product Title</h5>
                            <p class="card-text">This is a short description of the product.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted">$19.99</span>
                                <a href="#" class="btn btn-sm btn-primary">Add to Cart</a>
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