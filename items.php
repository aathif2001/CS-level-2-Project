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

        </style>
    </head>
    <body>
        <?php 
            $sql = "SELECT product_name, price FROM products";
            $result = $conn->query($sql); 

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='card'>";
                    echo "<img src='' alt='item_img'><br>";
                    // retrieve name from database 
                    echo "<span id='item_name'>".$row['product_name']."</span><br>";
                    // retrieve price fro database
                    echo "<span id='item_price'>LKR ".$row['price']."</span><br>";

                    // if($_SESSION["username"] == )
                    echo "<button>Add to Cart</button><button>edit</button><button>delete</button></div>";
                }
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