<?php
require_once "home/config.php";
$id=$_GET['id'];
$fetch_product_by_ID_query = "SELECT * FROM products where ID=$id";
$fetch_product_by_ID = mysqli_query($connection,$fetch_product_by_ID_query);
$product = mysqli_fetch_assoc($fetch_product_by_ID);
if(isset($_POST['submit'])){
    if ($product){
        session_start();
        $_SESSION['name']       = $product['tittle'];
        $_SESSION['price']      = $product['price'];
        $_SESSION['last_price'] = $product['list_price'];
        $_SESSION['details']    = $product['details'];
        $_SESSION['image']      = $product['image'];
        $_SESSION['buy_method'] = $product['buyMethod'];
        header("location: index.php");
    }
}




