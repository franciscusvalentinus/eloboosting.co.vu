<?php
    $username = "admin";
    $password = "admin";
    session_start();
?>
<html>
    <head>
        <title>Admin Catalog</title>
    </head>
    <body>
        <div>
            <?php
                if (isset($_SESSION['username'])){
            ?>
            <h1>Welcome - <?php echo $_SESSION['username'];?></h1>
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
        <h2>Catalog</h2>
        <div>
			<span><a href="buatKatalog.php">Tambahkan Produk</a></span> | 
        </div>
        <br><br>
        <?php
            include_once('config.php');
            $sql = "SELECT * FROM katalog";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) > 0){
                echo "<table border='1' cellspacing='0' cellpadding='0'>";
                    echo "<tr>";
                        echo "<th>ID</th> <th>RANK</th> <th>GAMBAR KE-1</th> <th>GAMBAR KE-2</th> <th>GAMBAR KE-3</th> <th>HARGA</th> <th>DESKRIPSI</th> <th>UPDATE</th> <th>DELETE</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                            echo "<td>".$row['id']."</td>"; 
                            echo "<td>".$row['rank']."</td>"; 
                            echo "<td><img src='../assets/images/".$row['image1']."' width='800' height='450'></td>";
                            echo "<td><img src='../assets/images/".$row['image2']."' width='800' height='450'></td>";
                            echo "<td><img src='../assets/images/".$row['image3']."' width='800' height='450'></td>";
                            echo "<td>".$row['price']."</td>";
                            echo "<td>".$row['description']."</td>";
                            echo "<td align='center'><a href='updateKatalog.php?toUpdatedID=".$row['id']."'>U</a></td>"; 
                            echo "<td align='center'><a href='deleteKatalog.php?toDeletedID=".$row['id']."'>X</a></td>"; 
                        echo "</tr>";
                    }
                echo "</table>";
            }
            else {
                echo "No Result";
            }
            mysqli_close($connect);
        }
        else{
            if($_POST['username']==$username && $_POST['password']==$password){
                $_SESSION['username'] = $username;
                echo "<script>location.href='katalogAdmin.php'</script>";
            }
            else {
                echo "<script>alert('username or password is incorrect')</script>";
                echo "<script>location.href='index.php'</script>";
            }
        }
        ?>
    </body>
</html>