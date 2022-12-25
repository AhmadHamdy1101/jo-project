<?php

include('../connect.php');    
session_start();

if (isset($_GET['department_id'])) {
    
    $id=$_GET['department_id'];
   
    $sql = "DELETE FROM department WHERE id= $id";
    mysqli_query($conn, $sql);

    header('Location: ../pages/show-department.php');
}

if (isset($_GET['product_id'])) {
    $product_id=$_GET['product_id'];
    echo $id;
    $sql = "DELETE FROM product WHERE id= $product_id";
    mysqli_query($conn, $sql);

    header('Location: ../pages/show-product.php');
}






?>