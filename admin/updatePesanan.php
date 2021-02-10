<?php
    $username = "admin";
    $password = "admin";
    session_start();
?>
<html>
    <head>
        <title>Update Pesanan</title>
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
                $sql = "SELECT * FROM pemesanan WHERE id='".$id."'";
                $result = mysqli_query($connect, $sql);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        $name = $row['name'];
                        $email = $row['email'];
                        $rank = $row['rank'];
                        $phone_number = $row['phone_number'];
                    }
                }
                else{
                    echo "0 results";
                }
        ?>
        <h3>Update pesanan with ID : <?=$id?> ?</h3>
        <div id="main">
            <form action="" method="POST">
                ID : <input type="text" name="upID" value="<?php echo $id;?>"/><br><br>
                Nama : <input type="text" name="name" value="<?php echo $name;?>"/><br><br>
                Email : <input type="text" name="email" value="<?php echo $email;?>"/><br><br>
                Rank : <input type="text" name="rank" value="<?php echo $rank;?>"/><br><br>
                Nomor Telepon : <input type="text" name="phone_number" value="<?php echo $phone_number;?>"/><br><br>
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
                $name = $_POST["name"];
                $email = $_POST["email"];
                $rank = $_POST["rank"];
                $phone_number = $_POST["phone_number"];
                $sql = "UPDATE pemesanan SET name='$name', email='$email', rank='$rank', phone_number='$phone_number' WHERE id='".$id."'";
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