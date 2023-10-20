<?php include 'conn.php' ?>

<html>
    <head>
        <style>
            .card {
                border: 1px solid black;
                border-radius: 10px;
                padding: 10px;
                margin: 10px;
            }
            .card > #item_name {
                font-weight: bold;
            }

            .card > #item_price {
                font-weight: bold;
                font-size: 20px;
            }
            form {
                text-align:center;
                margin: 15px;
            }
            #result {
                font-size: 20px;
                color: #a0a0a0;
                text-align:center;
                margin: 60px;
            }
        </style>
    </head>
    <body>
        <form action="products.php" method="post">
            <input type="text" name="search">
            <input type="submit" value="search">
        </form>
        
        <?php 
            // $items = array();
            if(isset($_POST['search'])){
                $searchKey = $_POST['search'];
                $sql = "SELECT product_name, price, in_stock FROM products WHERE product_name LIKE '%".$_POST['search']."%'";
            } else {
                $sql = "SELECT product_name, price, in_stock FROM products";
            }

            $result = $conn->query($sql); 

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    // $items[]
                    echo "<div class='card'>";
                    echo "<img src='' alt='item_img'><br>";
                    // retrieve name from database 
                    echo "<span id='item_name'>".$row['product_name']."</span><br>";
                    // retrieve price fro database
                    echo "<span id='item_price'>LKR ".$row['price']."</span><br>";
                    echo "<button>Add to Cart</button>";
                    
                    if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == "admin"){
                        echo "user type";
                    }
                    echo "</div>";
                }
            } else {
                echo "<p id='result'>0 results<p>";
            }
        ?>

        <!-- <div class="card">
            <img src="#" alt="item_img"><br>
            <span id="item_name"></span>
            <span id="item_name"></span>
            <button>Add to Cart</button>
            <button>edit</button>
            <button>delete</button>
        </div> -->
    </body>
</html>