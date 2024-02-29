<?php
require_once "home/config.php";
$id=$_GET['id'];
$fetch_product_by_ID_query = "SELECT * FROM products where ID=$id";
$fetch_product_by_ID = mysqli_query($connection,$fetch_product_by_ID_query);
$product = mysqli_fetch_assoc($fetch_product_by_ID);

session_start();

if(isset($_POST['submit'])){
    if ($product){   
        if(isset($_SESSION['cart'])){
            $session_array_id = array_column($_SESSION['cart'],'id');

            if(!in_array($_GET['id'],$session_array_id)){
                $session_array = array(
                    "id"         => $_GET['id'],
                    "name"       => $product['tittle'],
                    "price"      => $product['price'],
                    "last_price" => $product['list_price'],
                    "details"    => $product['details'],
                    "image"      => $product['image'],
                    "buyMethod"  => $product['buyMethod'],
                );
                $_SESSION['cart'][] = $session_array;  
            }

        }else{
           
            $session_array = array(
                "id"         => $_GET['id'],
                "name"       => $product['tittle'],
                "price"      => $product['price'],
                "last_price" => $product['list_price'],
                "details"    =>   $product['details'],
                "image"      => $product['image'],
                "buyMethod"  => $product['buyMethod'],
            );
            $_SESSION['cart'][] = $session_array;
        }
        header("location: index.php");
    }
    
}




