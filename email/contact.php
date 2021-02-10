<?php
include "config.php";
$secret_key = "6LfNt8cZAAAAAMVmXJ81mOXkJpwRmKRuPNy_Q7Ks";
$verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
$response = json_decode($verify);

if($response->success) {
	if(isset($_POST["submit"])){
	    $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    
        // Check connection
        if ($connect->connect_error) {
           die("Connection failed: " . $connect->connect_error);
        } 
        $sql = "INSERT INTO kontak (name, email, message) VALUES('$name','$email','$message')";
    
        if (mysqli_query($connect, $sql)) {
        }
        $connect->close();
        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from=$_POST['email'];
        $to="franciscusvalentinus@gmail.com";
        $subject="Someone Contacted You via eloboosting.co.vu";
        $message=$_POST['message'];
        $headers = "From:" . $name;
        mail($to,$subject,$message, $headers);
        if(@mail) {
           header ("location:../successfully-sent.php");
        }
	} 
}
else {
         header ("location:../failed.php");
        }
?>