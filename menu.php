<?php session_start(); ?>

<html>
    <head>
        <style>
            .menu {
                    text-align: center;
                    margin: auto;
                    width: 500px;
                    border: 1px solid black;
                    padding: 20px;
                }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #2C2A29;
                height:75px;
                
                
                
                }

            li {
                float: right;
                width:15%;
            }

            li a {
                display: inline-block;
                color: white;
                font-family:times new roman;
                font-size: 100px;
                text-align: center;
                padding: 30px 20px;
                text-decoration: none;
                font-size: 17px;
                height:100px;
                width:max-content;
                }

            li a:hover:not(.active) {
                background-color: #DC631D;
                text-decoration:overline;
                transition: background-color 0.5s,text-decoration 0.5s;
            }
            .active {
                background-color: #DC631D;}
            .logo{
                font-family: "Lucida Console", "Courier New", monospace;
                font-size:25px;
                align:left;
                position: relative;
                right:20px;
                top:20px;

            }
    </style>
    </head>
    <body>
    <ul>
        <li><a href="logout.php">
            <?php
                if (isset($_SESSION['username'])){
                    echo "Log out";   // currently logged in
                } else {
                    echo "Log out";   // currently logged out
                }
            ?>
        </a></li>
        <li><a href="help.php">Help</a></li>
        <li><a href="products.php">Products</a></li>
        <li><?php
                if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == "admin"){
                    echo "<li><a href='./admin'>Dashboard</a></li>";
                }
            ?></li>
        <li><a href="home.php">Home</a></li>
        <li class='logo'>LAPTOP.LK </li>
    </ul>

        
    
    </body>
</html>