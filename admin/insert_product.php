<?php

    include '../conn.php';
    
    $product_name = $_POST['product_name'];
    $stock = $_POST['stock'];
    $cost = $_POST['cost'];
    $price = $_POST['price'];

    $sql = "INSERT INTO products (product_name, in_stock, price, cost)
    VALUES ('$product_name', '$stock', '$cost' , '$price')";

    if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New Record created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>