<?php
include "connection.php";

$pid = $_POST["pid"];

// echo($uid);

if(empty($pid)){
    echo("Please Enter Your product Id");
} else {

    $rs = Database::search("SELECT * FROM `product` WHERE `id`='" . $pid . "'");
    $num = $rs->num_rows;
    // echo($num);

    if ($num == 1) {

        echo ("open model");
    } else {
        echo ("Invalid product Id");
    }
}


?>