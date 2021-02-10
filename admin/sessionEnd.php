<html>
    <head>
        <title>Session End</title>
    </head>
    <body>  
        <?php
            $username = "admin";
            $password = "admin";
            session_start();
            if (isset($_SESSION['username'])){
                session_destroy();
                header("location:index.php");
            }
            else{
                echo "<script>location.href='index.php'</script>";
            }
        ?>
    </body>
</html>