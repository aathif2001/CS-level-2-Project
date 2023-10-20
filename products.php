<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        
    <?php
        include 'menu.php';

        session_start();
        
        if (isset($_SESSION["username"])) {
            include 'items.php';
        } else {
            echo "<script>location.href='login.php'</script>";
        }
    ?>
    </body>
</html>