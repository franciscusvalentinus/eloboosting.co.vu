<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from=$_POST['from'];
$to="franciscusvalentinus@gmail.com";
$subject=$_POST['subject'];
$message=$_POST['message'];
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
if(@mail) {
header ("location:https://logarexisfun.web.app/successfully-sent.html");
}
?>