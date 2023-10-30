<html>
    <head>
        <title>Profile</title>
        <style>
            div {
                text-align: center;
            }

            button {
                padding: 10px;
                border: none;
                background-color: lightblue;
                border-radius: 5px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <script>
            function logout(){
                location.href='logout.php'
            }
        </script>
        <div>

        <?php
            session_start();
            
            if (!isset($_SESSION['username'])) {
                return;
            }
            echo "<h1>".$_SESSION['name']."</h1>";
            echo "<h3>Username : ".$_SESSION['username']."</h3>";
            echo "<p>User Type : ".$_SESSION['usertype']."</p>";
        ?>

        <button onclick="logout()">Log Out</button>
        <hr>

        <?php
            echo "<p>Email Address : </p>";
            echo "<p>Contact Number : </p>";
        
        ?>
        
        </div>

        
        
    </body>
</html>