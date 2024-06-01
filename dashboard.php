<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | SWART INDUSTRIES</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="icon" href="resources\profile for swart.jpg">
</head>
<body class="adminBody">

<?php include "adminnav.php";?>

    <div class="container-fluid">
        <div class="col-12">
        <div class="p-0 container-fluid"> <div class="py-3 row bg-light">
            <div class="text-center col-md-4">
                <h3 class="display-4">$<span id="daily-earning">123.45</span></h3>
                <p class="text-muted">Daily Earning</p>
            </div>
            <div class="text-center col-md-4 border-left border-right">
                <h3 class="display-4">$<span id="monthly-earning">3,456.78</span></h3>
                <p class="text-muted">Monthly Earning</p>
            </div>
            <div class="text-center col-md-4">
                <h3 class="display-4"><span id="total-engagement">12,345</span></h3>
                <p class="text-muted">Total Engagement</p>
            </div>
        </div>

        <div class="py-3 row">
            <div class="text-center col-md-6">
                <h3 class="display-4"><span id="today-selling">25</span></h3>
                <p class="text-muted">Today's Selling</p>
            </div>
            <div class="text-center col-md-6 border-left">
                <h3 class="display-4"><span id="monthly-selling">150</span></h3>
                <p class="text-muted">Monthly Selling</p>
            </div>
        </div>

        <div class="py-3 row bg-light">
            <div class="text-center col-md-12">
                <h3 class="display-4">$<span id="total-selling">12,345.67</span></h3>
                <p class="text-muted">Total Selling</p>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bskAUcGYLNBzUHbsjoXBw4b4+alvE4Eb4Vs+huljiskcU7yqkMKnxuogbIz9PPv9b7E" crossorigin="anonymous"></script>
        </div>
    </div>
</body>
</html>