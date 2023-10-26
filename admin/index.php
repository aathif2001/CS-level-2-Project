<?php include '../conn.php'; ?>

<html>
  <head>
    <meta charset="UTF-8" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  </head>
<body>

  <div class="container">
    <nav>
      <ul>
        <li><a href="../home.php" class="logo">
          <img src="../images/logo1.jpg" alt="">
          <span class="nav-item">E-store</span>
        </a></li>
        <li><a href="../home.php">
          <i class="fas fa-home"></i>
          <span class="nav-item">Home</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Analytics</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">Products</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-cog"></i>
          <span class="nav-item">Settings</span>
        </a></li>
        <li><a href="../help.php">
          <i class="fas fa-question-circle"></i>
          <span class="nav-item" href="help.php">Help</span>
        </a></li>
        <li><a href="../logout.php" class="logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

    <section class="main">
      <div class="main-top">
        <h1>Admin Dashboard</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="main-skills">
        <div class="card users">
          <h3>users</h3>
          <h1><?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            echo $result->num_rows;
          ?></h1>
        </div>
        <div class="card products">
          <h3>products</h3>
          <h1><?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            echo $result->num_rows;
          ?></h1>
        </div>
        <div class="card">
          <h3>Sales</h3>
        </div>
        <div class="card">
          <h3>Suppliers</h3>
        </div>
      </div>

      <section class="main-course">
        <h1>&nbsp;Users</h1>
        <div class="course-box">
          <div class="course">
            <table>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Username</th>
                <th></th>
                <th></th>
              </tr>
              <?php
                $sql = "SELECT id, name, username FROM users";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo "<tr><td>". $row["id"]."</td><td>".$row["name"]."</td><td>".$row["username"]."</td><td><button>Edit</button></td><td><button>delete</button></td></tr>";
                  }
                } else {
                  echo "0 results";
                }
              ?>
              </table>
          </div>
        </div>
      </section>

      <section class="main-course">
        <h1>&nbsp;Add Products</h1>
        <div class="course-box">
          <div class="course">
              
            <form action="insert_product.php" method="post" enctype="multipart/form-data">
              <table>
                <tr>
                  <td>Product Name :</td>
                  <td><input type="text" name="product_name" required></td>
                </tr>
                <tr>
                  <td>In Stock :</td>
                  <td><input type="number" name="stock" required></td>
                </tr>
                <tr>
                  <td>Cost :</td>
                  <td><input type="number" name="cost" required></td>
                </tr>
                <tr>
                  <td>Price :</td>
                  <td><input type="number" name="price" required></td>
                </tr>
                <tr>
                  <td>Name of the picture :</td>
                  <td><input type="text" name="picture" required></td>
                </tr>
              </table>
              <input type="submit" value="add">
              
            </form>
              
            </div>
        </div>
      </section>
      
    </section>
  </div>
</body>
</html>

