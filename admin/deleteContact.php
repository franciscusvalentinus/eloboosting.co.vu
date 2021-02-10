<?php
    $username = "admin";
    $password = "admin";
    session_start();
?>
<html>
    <head>
        <title>Delete Contact</title>
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
                $sql = "SELECT * FROM kontak WHERE id='".$id."'";
                $result = mysqli_query($connect, $sql);
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        $name = $row['name'];
                        $email = $row['email'];
                        $message = $row['message'];
                    }
                }
                else{
                    echo "0 results";
                }
        ?>
        <h3>Delete data with ID : <?=$id?> ?</h3>
        <div id="main">
            <p>Nama : <?=$name;?></p>
            <p>Email : <?=$email;?></p>
            <p>Message : <?=$message;?></p>
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
                $sql = "DELETE FROM kontak WHERE id='".$id."'";
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