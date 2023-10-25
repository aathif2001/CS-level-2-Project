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
          <i class="fas fa-user"></i>
          <span class="nav-item">Users</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Analytics</span>
        </a></li>
        <li><a href="">
          <i class="fas fa-tasks"></i>
          <span class="nav-item">To Do</span>
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
        <div class="card">
          <h3>users</h3>
          <?php
            $sql = "SELECT * FROM users";
            $result = $conn->query($sql);
            echo $result->num_rows;
          ?>
        </div>
        <div class="card">
          <h3>products</h3>
          <?php
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);
            echo $result->num_rows;
          ?>
        </div>
        <div class="card">
          <h3>Sales</h3>
        </div>
        <div class="card">
          <h3>Suppliers</h3>
        </div>
      </div>

      <section class="main-course">
        <h1>Categories</h1>
        <div class="course-box">
          <ul>
            <li class="active">In progress</li>
            <li>explore</li>
            <li>incoming</li>
            <li>finished</li>
          </ul>
          <div class="course">
            <div class="box">
              <h3>JavaScript</h3>
              <p>30% - progress</p>
              <button>continue</button>
              <i class="fab fa-js-square js"></i>
            </div>
          </div>
        </div>
      </section>
    </section>
  </div>
</body>
</html></span>