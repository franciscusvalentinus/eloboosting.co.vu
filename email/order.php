<?php
include "config.php";
if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rank = $_POST['rank'];
    $phone_number = $_POST['phone_number'];

    // Check connection
    if ($connect->connect_error) {
       die("Connection failed: " . $connect->connect_error);
    } 
    $sql = "INSERT INTO pemesanan (name, email, rank, phone_number) VALUES('$name','$email','$rank','$phone_number')";

    if (mysqli_query($connect, $sql)) {
    }
    $connect->close();

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from="franciscusvalentinus@gmail.com";
    $to=$_POST['email'];
    $subject="Pembayaran Order eloboosting.co.vu";
    $message="Hi $name,
    Untuk melanjutkan order joki $rank, lakukan pembayaran terlebih dahulu ke rekening BCA : 2582384224 (a.n. FRANCISCUS VALENTINUS ONGKOSIANBHADRA).
    Setelah melakukan pembayaran, harap segera balas email ini atau WA ke 0813 3313 8472 untuk segera diproses.
    Thank You";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    if(@mail) {
    header ("location:../successfully-sent.php");
 }
}
?>