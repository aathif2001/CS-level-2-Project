<html>

<head>
<style>
    h1 {
	    color:blue;
	}
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
	    color:black;
        background-image:url("./images/electronic-gadgets.jpeg");
        background-attachment:fixed;
        background-size:cover;
        background-repeat:no-repeat;
    }
    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background:#fff;
        border-radius: 25px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-top:50px;
    }
    form {
        padding: 20px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .block{
        margin-left:80px;
    }
    .block input[type=submit]{
        background-color:cyan;
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius:10px;
    }
    .block input[type=reset]{
        background-color: cyan;
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius:10px;
    }
</style>
</head>
<body>
    <script>
        function back() {
            location.href="home.php";
        }
    </script>
    <div class="container">
    <h1 style="text-align:center">Register From</h1>
    
    <form action="signup.php" method="post">
        <b>Name : </b>
        <input type="text" name="name" placeholder="Full Name" required><br>

        <b>Username : </b>
        <input type="text" name="username" placeholder="Username" required><br>

        <b>Email :</b>
        <input type="email" name="email" placeholder="Enter you Email" required><br>

        <b>Contact Number :</b>
        <input type="text" name="contact" placeholder="07xxxxxxxxx" required><br>

        <b>Password :</b>
        <input type="password" name="password" size="20" required>

        <b>Confirm Password :</b>
        <input type="password" name="re-password" size="20" required>
        <br><br>

        <div class="block">
            <input type="submit" value="Register">       
            <input type="Reset" value="Cancel" onclick="back()">
        </div>
        </div>

    </form>

    <?php
        include 'conn.php';
        
        if(!isset($_POST['password']) || !isset($_POST['re-password'])){
            return;
        }

        if ($_POST['password'] !== $_POST['re-password']){
            echo "<script>alert('Password Mismatch');</script>";
            echo "<script>location.href='signup.php'</script>";
            retun;
        }
        
        if(!isset($_POST['username']) || !isset($_POST['password'])){
            return;
        }
        $name = $_POST['name'];
        $username = $_POST['username'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (name, username, password)
        VALUES ('$name', '$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New Record created successfully');</script>";
            echo "<script>location.href='home.php'</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    ?>
</body>
</html>