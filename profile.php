<html>
    <head>
        <title>Profile</title>
        <style>
            div {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div>

        <?php
            session_start();
            
            if (!isset($_SESSION['username'])) {
                return;
            }
            echo "<h1>".$_SESSION['username']."</h1>";
            echo "<h3>Username : ".$_SESSION['name']."</h3>";
            echo "<p>User Type : ".$_SESSION['usertype']."</p><hr>";

            echo "<p>Email Address : </p>";
            echo "<p>Contact Number : </p>";
        
        ?>
        
        </div>

        
        
    </body>
</html>