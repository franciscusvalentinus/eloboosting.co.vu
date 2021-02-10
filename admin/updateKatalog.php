<?php
    $username = "admin";
    $password = "admin";
    session_start();
?>
<html>
    <head>
        <title>Update Katalog</title>
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
        <?php
            if(isset($_GET["toUpdatedID"])){
                include_once("config.php");
                $id = $_GET["toUpdatedID"];
                $sql = "SELECT * FROM katalog WHERE id='".$id."'";
                $result = mysqli_query($connect, $sql);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        $rank = $row['rank'];
                        $image1 = $row['image1'];
                        $image2 = $row['image2'];
                        $image3 = $row['image3'];
                        $price = $row['price'];
                        $description = $row['description'];
                    }
                }
                else{
                    echo "0 results";
                }
        ?>
        <h3>Update data with ID : <?=$id?> ?</h3>
        <div id="main">
            <form action="" method="POST">
                ID : <input type="text" name="upID" value="<?php echo $id;?>"/><br><br>
                Rank : <input type="text" name="rank" value="<?php echo $rank;?>"/><br><br>
                Gambar Ke-1: <input type="text" name="image1" value="<?php echo $image1;?>"/><br><br>
                Gambar Ke-2: <input type="text" name="image2" value="<?php echo $image2;?>"/><br><br>
                Gambar Ke-3: <input type="text" name="image3" value="<?php echo $image3;?>"/><br><br>
                Harga : <input type="text" name="price" value="<?php echo $price;?>"/><br><br>
                Deskripsi: <input type="text" name="description" value="<?php echo $description;?>"/><br><br>
                <input type="submit" value="Update" name="update"/>
                <br><br>
            </form>
        </div>
        <?php
            }
        ?>
        <?php
            if(isset($_POST["update"])){
                $id = $_POST["upID"];
                $rank = $_POST["rank"];
                $image1 = $_POST['image1'];
                $image2 = $_POST['image2'];
                $image3 = $_POST['image3'];
                $price = $_POST["price"];
                $description = $_POST['description'];
                $sql = "UPDATE katalog SET rank='$rank', image1='$image1', image2='$image2', image3='$image3', price='$price', description='$description' WHERE id='".$id."'";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);
        ?>
        <h3>Data with ID : <?=$id?> is updated succesfully</h3>
        <?php
            }
        }
        else{
            echo "<script>location.href='index.php'</script>";
        }
        ?>
    </body>
</html>