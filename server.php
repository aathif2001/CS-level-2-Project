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
                    echo "<script>alert('You are already logged in.')</script>";
                    echo "<script>location.href='products.php'</script>";
                    return;
            } else {
                $row = $result->fetch_assoc();
                
                // if username and password didn't match
                if($row == null){
                    echo "<script>alert('Incorrect Details');</script>";
                    echo "<script>location.href='products.php'</script>";
                    return;
                }
                // store user details in a session
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['usertype'] = $row['user_type'];

                // if checkbox checked save username and password in cookies
                if(isset($_GET["check"])){
                    setCookie('username', $formUsername);
                    setCookie('password', $formPassword);
                }

                echo "<script>location.href='products.php'</script>";
                return;

            }

        ?>

    </body>
</html>