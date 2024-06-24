<?php

session_start();
require "connection.php";

$email = $_SESSION["au"]["email"];

$product_id = $_POST["pid"];
$title = $_POST["t"];
$description = $_POST["d"];
$price = $_POST["p"];
$qty = $_POST["q"];


if(empty($title)){
    echo ("Please Enter a Title");
}else if(strlen($title) >= 200){
    echo ("Title should have lover than 100 characters");
}else if(empty($description)){
    echo ("Please Enter a Description.");
}else if(strlen($description)>=2000){
    echo ("Description should have lover than 100 characters");
}else if(empty($qty)){
    echo ("Please Enter the Quantity.");
}else if($qty == "0" | $qty == "e" | $qty < 0){
    echo ("Invalid input for Quantity");
}else if(empty($price)){
    echo ("Please Enter the Price.");
}else if(!is_numeric($price)){
    echo ("Invalid input for Cost");
}else{
    
    

    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");

    Database::iud("UPDATE `product` SET `title`='".$title."',`description`='".$description."',`price`='".$price."',`update_date`='".$date."',`qty`='".$qty."' WHERE `id`='".$product_id."'");

    echo ("Product saved successfully");

    $product_id = Database::$connection->insert_id;

    $length = sizeof($_FILES);

    if($length <= 3 && $length > 0){

        $allowed_img_extentions = array ("image/jpg","image/jpeg","image/png","image/svg+xml");

        for($x = 0; $x < $length;$x++){
            if(isset($_FILES["image".$x])){

                $img_file = $_FILES["image".$x];
                $file_extention = $img_file["type"];

                if(in_array($file_extention,$allowed_img_extentions)){

                    $new_img_extention;

                    if($file_extention == "image/jpg"){
                        $new_img_extention = ".jpg";
                    }else if($file_extention == "image/jpeg"){
                        $new_img_extention = ".jpeg";
                    }else if($file_extention == "image/png"){
                        $new_img_extention = ".png";
                    }else if($file_extention == "image/svg+xml"){
                        $new_img_extention = ".svg";
                    }

                    $file_name = "resources/product_img".$title."_".$x."_".uniqid().$new_img_extention;
                    move_uploaded_file($img_file["tmp_name"],$file_name);

                    Database::iud("UPDATE `product` SET `path`='".$file_name."' WHERE `id`='".$product_id."'");

                }else{
                    echo ("Invalid Image type");
                }

            }
        }

        echo ("Product image saved successfully");

    }else{
        echo ("Invalid image count");
    }
    
    
    
}

?>