<?php
    $username = "admin";
    $password = "admin";
    session_start();
?>
<html>
    <head>
        <title>Admin Contact</title>
    </head>
    <body>
        <div>
            <?php
                if (isset($_SESSION['username'])){
            ?>
            <h1>Welcome - Admin</h1>
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
        <h2>Contact</h2>
        <?php
            include('config.php');
            $sql = "SELECT * FROM kontak";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) > 0){
                echo "<table border='1' cellspacing='0' cellpadding='0'>";
                    echo "<tr>";
                        echo "<th>ID</th> <th>NAMA</th> <th>EMAIL</th> <th>PESAN</th> <th>DELETE</th>";
                    echo "</tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                            echo "<td>".$row['id']."</td>"; 
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['message']."</td>";
                            echo "<td align='center'><a href='deleteContact.php?toDeletedID=".$row['id']."'>X</a></td>"; 
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
            echo "<script>location.href='index.php'</script>";
        }
        ?>
    </body>
</html>