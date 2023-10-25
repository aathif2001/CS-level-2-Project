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
        
        <!-- search bar  -->
        <form action="products.php" method="post">
            <input type="text" name="search">
            <input type="submit" value="search">
        </form>
        
        <script>
            function editItem(product_id){
                var url = 'edit.php?id='+ product_id
                location.href= url;
            } 
            function deleteItem(product_id){
                // location.href='delete.php';
                var confirmation = window.confirm("Are you sure to delete this product ?");
             }  
            function addToCart(){
                location.href='cart.php';
            }
        </script>

        <?php 
            // search bar logic 
            if(isset($_POST['search'])){
                $searchKey = $_POST['search'];
                $sql = "SELECT product_id, product_name, price, in_stock FROM products WHERE product_name LIKE '%".$_POST['search']."%'";
            } else {
                $sql = "SELECT product_name, price, in_stock FROM products";
            }

            $result = $conn->query($sql); 

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='card'>";
                    echo "<img src='' alt='item_img'><br>";
                    // retrieve name from database 
                    echo "<span id='item_name'>".$row['product_name']."</span><br>";
                    // retrieve price from database
                    echo "<span id='item_price'>LKR ".$row['price']."</span><br>";
                    echo "<button onclick='addToCart()'>Add to Cart</button>";
                    
                    // Authorization - only admin can edit or delete products 
                    if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == "admin"){
                        global $P_id;
                        if (isset($row['product_id'])) {$P_id = $row['product_id'];}
                        echo $P_id;
                        echo "<button onclick=editItem(".$P_id.")>Edit</button>";
                        echo "<button onclick='deleteItem(2)'>Delete</button>";
                    }
                    echo "</div>";
                }
            } else {
                echo "<p id='result'>0 results<p>";
            }
        ?>

        
        
    </body>
</html>

<!-- <div class="card">
            <img src="#" alt="item_img"><br>
            <span id="item_name"></span>
            <span id="item_name"></span>
            <button>Add to Cart</button>
            <button>edit</button>
            <button>delete</button>
        </div> -->