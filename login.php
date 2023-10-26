<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log in</title>
    <link rel="stylesheet" href="css/login.css">
    
</head>
<body background="images/login1.jpg">
<img src="images/logo3.jpg" alt="logo" class="login-logo">
    <div class="login-form ">
        <h1 >LOGIN</h1>
        
        <form action="server.php" method="get">
            <label for="name"> Name : </label>
            <input type="text" name="name" placeholder="Enter Your Username" value=<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'] ?>>
            <br><br>
            <label for="pwd" >Password :</label>
            <input type="password" name="pwd" placeholder="Enter Your Password"value=<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'] ?>>
            <br>
            <input type="checkbox" name="check">Remember me 
            <br>
            <input type="submit" value="Log in" class="btn-login" ><br><br>
            <a href="signup.php">Register</a>
        </form>
    </div>
</body>
</html>