<html>
    <head>
        <title>Products</title>
        <style>
            body {
                margin: 0
            }
        </style>    
    </head>
    <body>
        
    <?php
        include 'menu.php';

        if (isset($_SESSION["username"])) {
            include 'items.php';
        } else {
            echo "<script>location.href='login.php'</script>";
        }
    ?>
    </body>
</html>