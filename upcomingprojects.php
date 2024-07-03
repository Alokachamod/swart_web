<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upcomingprojects</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="resources\swart new logo                           S.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
</head>

<body class="upbody-bg-dark ">
    <?php include "header.php"; ?>
    <div class="container-fluid">

        <div class="col-12">
            <div class="text-center uch">Upcoming Projects</div>
            <div class="d-flex">
                <?php

                $project_rs = Database::search("SELECT * FROM `project`");
                $project_num = $project_rs->num_rows;

                for ($z = 0; $z < $project_num; $z++) {
                    $project_data = $project_rs->fetch_assoc();



                ?>
                    <div class="mb-3 card offset-1 uccard" style="max-width: 540px;">
                        <?php
                        $image_rs = Database::search("SELECT * FROM `project_img` WHERE `project_id`='" . $project_data["id"] . "'");
                        $image_data = $image_rs->fetch_assoc();
                        ?>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo $image_data["path"]; ?>" class="img-fluid rounded-start">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $project_data["title"]; ?></h5>
                                    <p class="card-text"> <?php echo $project_data["description"]; ?> </p>
                                    <?php
                                    // Assuming you have the update time stored in a variable $updateTime
                                    $updateTime = $project_data["update_date"]; // Example update time

                                    // Get the current time
                                    $currentTime = time();

                                    // Calculate the time difference in seconds
                                    $timeDiff = $currentTime - strtotime($updateTime);

                                    // Define the time units
                                    $timeUnits = array(
                                        'year' => 31536000,
                                        'month' => 2592000,
                                        'week' => 604800,
                                        'day' => 86400,
                                        'hour' => 3600,
                                        'minute' => 60,
                                        'second' => 1
                                    );

                                    // Loop through the time units and calculate the duration
                                    $duration = '';
                                    foreach ($timeUnits as $unit => $value) {
                                        if ($timeDiff >= $value) {
                                            $count = floor($timeDiff / $value);
                                            $duration .= $count . ' ' . ($count > 1 ? $unit . 's' : $unit) . ' ';
                                            $timeDiff = $timeDiff % $value;
                                        }
                                    }

                                    // Trim any leading/trailing spaces from the duration string
                                    $duration = trim($duration);
                                    ?>
                                    <p class="card-text"><small class="text-body-secondary">Updated <?php echo $duration; ?> ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
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