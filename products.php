<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        
    <?php
        include 'menu.php';

        session_start();
        
        if (isset($_SESSION["username"])) {
            echo "<h1>This is product page.</h1><br>";
            echo "This page contains product list";
        } else {
            echo "<script>location.href='login.php'</script>";
        }
    ?>
    </body>
</html>