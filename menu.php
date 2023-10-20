<?php session_start(); ?>

<html>
    <head>
        <style>
            .menu {
                    text-align: center;
                    margin: auto;
                    width: 300px;
                    border: 1px solid black;
                    padding: 20px;
                }
        </style>
    </head>
    <body>
        <div class="menu">
            <a href="home.php">Home</a><br>
            <a href="products.php">Products</a><br>
            <a href="help.php">help</a><br>
            <?php
                if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == "admin"){
                    echo "<a href='admin.php'>Dashboard</a><br>";
                }
            ?>
            <a href="logout.php">logout</a>
        </div>
    </body>
</html>