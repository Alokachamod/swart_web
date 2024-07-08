<?php

echo("ok");

/*require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST['n'];
$email = $_POST['e'];
$mobile = $_POST['m'];
$massage = $_POST['msg'];

if(empty($name)){
    echo "Please enter your name.";
}else if(empty($email)){
    echo "Please enter your email.";
}else if(strlen($email) > 100){
    echo ("Email Address Must Contain LOWER THAN 100 characters.");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email Address.");
}else if(empty($mobile)){
    echo "Please enter your mobile number.";
}else if(strlen($mobile) != 10){
    echo ("Mobile Number Must Contain 10 characters.");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8]{1}[0-9]{7}/",$mobile)){
    echo ("Invalid Mobile Number.");
}else if(empty($massage)){   
    echo "Please enter your message.";
}else{

    $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'alokachamod3@gmail.com';
        $mail->Password = 'pmjz vtrm gaol fdpu';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('alokachamod3@gmail.com', 'Admin Verification');
        $mail->addReplyTo($email, 'Admin Verification');
        $mail->addAddress('alokachamod3@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = 'SWART Contact Us';
        $bodyContent = 
        ' '.$name.',<br>
        '.$mobile.',<br>
        '.$email.',<br>
        '.$massage.'';
        $mail->Body    = $bodyContent;

        if (!$mail->send()) {
            echo 'Verification code sending failed.';
        } else {
            echo 'Success';
        }
    
}*/

?>