<html>
    <head>
        <title>Edit Product Page</title>
    </head>
    <body>
<?php
    
    include '../conn.php';

    $productid = $_POST['productid'];

    $sql1 = "SELECT FROM products WHERE product_id = $productid" ;
    $result = $conn->query($sql1);
    
    $row1 = $result->fetch_assoc();
    echo 'Now the preset values are product id: '.$row['product_id'].' product name :'.$row['product_name'];

?>
    </body>
</html>