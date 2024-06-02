<?php

session_start();

include "connection.php";

if (isset($_SESSION["au"])) {

?>
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

        <?php include "adminnav.php"; ?>

        <div class="container-fluid">
            <div class="col-12">
                <div class="p-0 container-fluid">
                    <div class="py-3 row bg-light">
                        <div class="text-center col-md-4">
                            <?php

                            $today = date("Y-m-d");
                            $thismonth = date("m");
                            $thisyear = date("Y");

                            $a = "0";
                            $b = "0";
                            $c = "0";
                            $e = "0";
                            $f = "0";

                            $invoice_rs = Database::search("SELECT * FROM `invoice`");
                            $invoice_num = $invoice_rs->num_rows;

                            for ($x = 0; $x < $invoice_num; $x++) {
                                $invoice_data = $invoice_rs->fetch_assoc();

                                $f = $f + $invoice_data["qty"]; //total qty

                                $d = $invoice_data["date"];
                                $splitDate = explode(" ", $d); //separate date from time
                                $pdate = $splitDate[0]; //sold date

                                if ($pdate == $today) {
                                    $a = $a + $invoice_data["total"];
                                    $c = $c + $invoice_data["qty"];
                                }

                                $splitMonth = explode("-", $pdate); //separate date as year,month & date
                                $pyear = $splitMonth[0]; //year
                                $pmonth = $splitMonth[1]; //month

                                if ($pyear == $thisyear) {
                                    if ($pmonth == $thismonth) {
                                        $b = $b + $invoice_data["total"];
                                        $e = $e + $invoice_data["qty"];
                                    }
                                }
                            }

                            ?>
                            <h3 class="display-4">LKR<span id="daily-earning"><?php echo $a; ?>.00</span></h3>
                            <p class="text-muted">Daily Earning</p>

                        </div>
                        <div class="text-center col-md-4 border-left border-right">
                            <h3 class="display-4">LKR<span id="monthly-earning"> <?php echo $b; ?>.00</span></h3>
                            <p class="text-muted">Monthly Earning</p>
                        </div>
                        <div class="text-center col-md-4">
                            <?php
                            $user_rs = Database::search("SELECT * FROM `user`");
                            $user_num = $user_rs->num_rows;
                            ?>
                            <h3 class="display-4"><span id="total-engagement"><?php echo $user_num; ?> Members</span></h3>
                            <p class="text-muted">Total Engagement</p>
                        </div>
                    </div>

                    <div class="py-3 row">
                        <div class="text-center text-light col-md-6">
                            <h3 class="display-4"><span id="today-selling"><?php echo $c; ?> Items</span></h3>
                            <p class="">Today's Selling</p>
                        </div>
                        <div class="text-center text-light col-md-6 border-left">
                            <h3 class="display-4"><span id="monthly-selling"><?php echo $e; ?> Items</span></h3>
                            <p class="">Monthly Selling</p>
                        </div>
                    </div>

                    <div class="py-3 row bg-light">
                        <div class="text-center col-md-12">
                            <h3 class="display-4">LKR<span id="total-selling"><?php echo $f; ?> Items</span></h3>
                            <p class="text-muted">Total Selling</p>
                        </div>
                    </div>

                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bskAUcGYLNBzUHbsjoXBw4b4+alvE4Eb4Vs+huljiskcU7yqkMKnxuogbIz9PPv9b7E" crossorigin="anonymous"></script>
            </div>
        </div>
    </body>

    </html>

<?php
} else {
    echo ("You are Not a valid user");
}
?>