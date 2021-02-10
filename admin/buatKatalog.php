<?php
    $username = "admin";
    $password = "admin";
    session_start();
?>
<html>
    <head>
        <title>Buat Katalog</title>
    </head>
    <body>
        <div>
            <?php
                if (isset($_SESSION['username'])){
            ?>
			<h1>Admin</h1>
            <form method="POST" action="sessionEnd.php">
                <input type="submit" value="Log Out">
            </form>
			<div>
				<span><a href="katalogAdmin.php">Katalog</a></span> | 
				<span><a href="pemesananAdmin.php">Pemesanan</a></span> | 
				<span><a href="contactAdmin.php">Contact</a></span> | 
			</div>
        </div>
        <br><br>
        <h2>Tambahkan Produk</h2>
        <form action="buatKatalog.php" method="POST" enctype="multipart/form-data">
        <label>Rank : </label> <input type="text" name="rank" required><br><br>
        <label>Gambar 1: </label>  <input type="file" name="image1" required><br><br>
        <label>Gambar 2: </label>  <input type="file" name="image2" required><br><br>
        <label>Gambar 3: </label>  <input type="file" name="image3" required><br><br>
        <label>Harga : </label>  <input type="number" name="price" required><br><br>
        <label>Deskripsi : </label> <textarea name="description" required></textarea><br><br>
        <input type="submit" value="Submit" name="submit">
        </form>
        <br>
        <?php

if(isset($_POST["submit"])){
    include_once('config.php');

    // Check connection
    if ($connect->connect_error) {
       die("Connection failed: " . $connect->connect_error);
    } 
    $image1 = $_FILES['image1']['name'];
            $tempName = $_FILES['image1']['tmp_name'];
            $dirupload = "../assets/images/";
            $uploaded = move_uploaded_file($tempName, $dirupload.$image1);

            $image2 = $_FILES['image2']['name'];
            $tempName = $_FILES['image2']['tmp_name'];
            $dirupload = "../assets/images/";
            $uploaded = move_uploaded_file($tempName, $dirupload.$image2);

            $image3 = $_FILES['image3']['name'];
            $tempName = $_FILES['image3']['tmp_name'];
            $dirupload = "../assets/images/";
            $uploaded = move_uploaded_file($tempName, $dirupload.$image3);
            
            $rank = $_POST['rank'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            
            $sql= "INSERT INTO katalog (rank, image1, image2, image3, price, description) VALUES('$rank','$image1','$image2','$image3','$price','$description')";
            if (mysqli_query($connect, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "" . mysqli_error($connect);
            }
            mysqli_close($connect);
        }
        if(!empty($_POST['nama'])){
            if(mysqli_query($connect, $sql)){
                echo "New record created successfully";
            }
            else{
                echo "Error";
            }
        }
    }
    else{
        echo "<script>location.href='index.php'</script>";
    }
    ?>
    </body>
</html>