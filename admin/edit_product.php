<?php
    
    include '../conn.php';

    $productid = $_POST['productid1'];

    $sql1 = "SELECT * FROM products WHERE product_id= $productid" ;
    $result = $conn->query($sql1);
    $row1 = $result->fetch_assoc();
    echo 'Now the preset values are
    <br> product id: ' . $row1['product_id'] .
    '<br> product name :' . $row1['product_name'] . 
    '<br> In stock:' . $row1['in_stock'] .
    '<br> Price:' . $row1['price'] .
    '<br> Cost:' . $row1['cost'] .
    '<br> Filename:' . $row1['filepath'];

?>
<html>
    <head>
        <title>Editing Values</title>
    </head>
    <body>
       
        <form action="editconfirm.php" method="post">
            <br>
            <input type="hidden" name='productid' value=<?php echo $productid; ?>>
            <label for="productname">Product Name :</label>
            <input type="text" name='productname' required> <br>
            <label for="price">Price :</label>
            <input type="number" name='price' required> <br>
            <label for="cost">Cost :</label>
            <input type="number" name='cost' required> <br>
            <label for="instock">In Stock :</label>
            <input type="number" name='instock' required> <br>
            <label for="filepath">Filename :</label>
            <input type="text" name='filepath' required> <br>
            <input type="submit" value="Confirm Edit">
        </form>
    </body>
</html>
