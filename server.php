<html>
        <style>
            .menu {
                    text-align: center;
                    margin: auto;
                    width: 300px;
                    border: 1px solid black;
                    padding: 20px;
                }
        </style>
    <body>

        <?php

            include("conn.php");
            
            // retrieve data from login form input fields
            $formUsername = $_GET['name'];
            $formPassword = $_GET['pwd'];

            $sql = "SELECT name, username, password, user_type FROM users WHERE username='$formUsername' and password='$formPassword'";
            $result = $conn->query($sql); 
            
            session_start();
            
            if (isset($_SESSION['username'])){
                    // $name = isset($_SESSION['name']) ? $_SESSION['name'] : $_SESSION['username'];
                    echo "Welcome ".$_SESSION['name'];
            } else {
                $row = $result->fetch_assoc();

                // store user details in a session
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['usertype'] = $row['user_type'];

                // if checkbox checked save username and password in cookies
                if(isset($_GET["check"])){
                    setCookie('username', $formUsername);
                    setCookie('password', $formPassword);
                }

                // echo "<script>location.href='products.php'</script>";
                return;

            }

                // if username and password didn't match
            echo "Incorrect details<br>";
            echo "<a href='login.php'>login</a>";
     
        ?>

        <div class="menu">
            <a href="home.php">Home</a><br>
            <a href="products.php">Products</a><br>
            <a href="logout.php">logout</a>
        </div>

    </body>
</html>