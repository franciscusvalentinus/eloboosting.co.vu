<?php
    $username = "admin";
    $password = "admin";
    session_start();
?>
<html>
    <head>
        <title>Delete Katalog</title>
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
            if(isset($_GET["toDeletedID"])){
                include_once("config.php");
                $id = $_GET["toDeletedID"];
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
        <h3>Delete data with ID : <?=$id?> ?</h3>
        <div id="main">
            <p>Rank : <?=$rank;?></p>
            <p>Gambar Ke-1: <?=$image1;?></p>
            <p>Gambar Ke-2: <?=$image2;?></p>
            <p>Gambar Ke-3: <?=$image3;?></p>
            <p>Harga : <?=$price;?></p>
            <p>Deskripsi : <?=$description;?></p>
            <form action="" method="POST">
                ID : <input type="text" name="delID" value="<?php echo $id;?>"/>
                <br><input type="submit" value="Delete" name="delete"/>
                <br>
            </form>
        </div>
        <?php
            }
        ?>
        <?php
            if(isset($_POST["delete"])){
                $id = $_POST["delID"];
                $sql = "DELETE FROM katalog WHERE id='".$id."'";
                $result = mysqli_query($connect,$sql);
                mysqli_close($connect);
        ?>
        <h3>Data with ID : <?=$id?> is deleted succesfully</h3>
        <?php
            }
        }
        else{
            echo "<script>location.href='index.php'</script>";
        }
        ?>
    </body>
</html>