<?php include 'conn.php' ?>

<html>
    <head>
        <style>
            .card {
                border: 1px solid black;
                border-radius: 10px;
                padding: 10px;
                margin: 10px;
                width:400px;
                height:400px;
                float:left;
                background-color:#8DB6C6;

            }
            .card > #item_name {
                font-weight: bold;
            }

            .card > #item_price {
                font-weight: bold;
                font-size: 20px;
            }
            form {
                text-align:left;
                margin: 1px;
            }
            #result {
                font-size: 20px;
                color: #a0a0a0;
                text-align:center;
                margin: 60px;
            }
            .edit{
                font-weight:bold;
                font-size:14px;
                color:white;
                background-color:rgb(24, 124, 76);
                border:none;
                border-radius:5px;
                cursor:pointer;
            }
            .cart{
                font-weight:bold;
                font-size:14px;
                color:white;
                background-color:#E18223;
                border:none;
                align:center;
                border-radius:5px;
                cursor:pointer;

            }
            .delete{
                font-weight:bold;
                font-size:14px;
                color:white;
                border:none;
                background-color:red;
                border-radius:5px;
                cursor:pointer;

            }
            input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 5px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width:10%;
            }
            input[type=text], select {
            width: 80%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            }
        </style>
    </head>
    <body style="background-color:#B0D2DE;">
        
        <!-- search bar  -->
        <form action="products.php" method="post">
            <input type="text" name="search">
            <input type="submit" value="search">
        </form>
        
        <?php 
            // search bar logic 
            if(isset($_POST['search'])){
                $searchKey = $_POST['search'];
                $sql = "SELECT product_id, product_name, price, in_stock, filepath FROM products WHERE product_name LIKE '%".$searchKey."%'";
            } else {
                $sql = "SELECT product_id, product_name, price, in_stock, filepath FROM products";
            }
            $result = $conn->query($sql); 

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='card'>";
                    echo "<img src='./products/" .$row['filepath']."' alt='item_img' height='250px'><br>";

                    // retrieve name from database 
                    echo "<span id='item_name'>".$row['product_name']."</span><br>";
                    // retrieve price from database
                    echo "<span id='item_price'>LKR ".$row['price']."</span><br>";
                ?>
                 
                        <form action="./cart.php" method="post">
                            <input type="hidden" name="productid" value="<?php echo $row['product_id'] ?>">
                            <button type="submit">ADD TO CART</button>
                        </form>

                <?php
                    // Authorization - only admin can edit or delete products 
                    if(isset($_SESSION['usertype']) && $_SESSION['usertype'] == "admin"){
                        global $P_id;
                        if (isset($row['product_id'])) {
                            $P_id = $row['product_id'];
                        }
                ?>

                        <form action="./admin/delete.php" method="post">
                        <input type="hidden" name="productid" value="<?php echo $P_id; ?>">
                        <button class='delete' type="submit">DELETE</button>
                        </form>

                        <form action="./admin/edit_product.php" method="post">
                        <input type="hidden" name="productid1" value="<?php echo $P_id; ?>">
                        <button type="submit">EDIT</button>
                        </form>
                        <?php
                    }
                    echo "</div>";
                }
            } else {
                echo "<p id='result'>0 results<p>";
            }
            ?>
            
            </body>
</html>

