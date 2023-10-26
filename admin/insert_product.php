<?php

    include '../conn.php';
    
    $product_name = $_POST['product_name'];
    $stock = $_POST['stock'];
    $cost = $_POST['cost'];
    $price = $_POST['price'];
    $filename = $_FILES["file"]["name"];

    // SQL query to count total rows in a table
    $sql1 = "SELECT COUNT(*) as total_rows FROM products";

    // Execute the query
    $result = $conn->query($sql1);

    // Fetch the result and store it in a variable
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $totalRows = $row["total_rows"];
    } else {
        $totalRows = 0;
    }

    $totalRows = $totalRows + 1;

    $sql = "INSERT INTO products (product_id ,product_name, in_stock, price, cost, filepath)
    VALUES ('$totalRows','$product_name', '$stock', '$cost' , '$price', '$filename')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>