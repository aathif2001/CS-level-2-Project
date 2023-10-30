<html>
<head>
    <title>Cart</title>
</head>

<body>
    <h1>Cart</h1>
    <!-- should store in cookies  -->
    <p>test commit from aathif</p>

    <table>
        <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>

<?php 

    include 'conn.php';

    $cart_items = array();
    $encode_cookie = "store_prodct_".$_POST['productid'];
    setcookie( $encode_cookie, 1);

    foreach ($_COOKIE as $key => $el) {
        if (substr($key,0,13) == "store_prodct_") {
            $product_id = substr($key,13);
            
            $sql = "SELECT product_name, price FROM products WHERE product_id='$product_id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            echo "<tr><td>".$product_id."</td><td>".$row['product_name']."</td><td>".$el."</td><td>".$row['price']."</td></tr>";
        }
    }
?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

</body>
</html>