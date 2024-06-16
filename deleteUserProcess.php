<?php

require "connection.php";

if (isset($_GET["email"])) {

    $user_email = $_GET["email"];

        Database::iud("DELETE FROM `user_has_address` WHERE `user_has_address`.`user_email` = '".$user_email."' ");
        Database::iud("DELETE FROM `user_img` WHERE `user_img`.`user_email` = '".$user_email."' ");
        Database::iud("DELETE FROM `user` WHERE `user`.`email` = '".$user_email."' ");
        echo ("deleted");
    } else {
        echo ("Cannot Find The User. Please Try Again Later...");
    }

