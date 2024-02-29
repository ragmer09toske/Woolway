<?php
include "Templates/headers.php";
?>
<!-- bootstrap too navigation menue -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="navbar1">
    <div class="container-fluid">
      <a id="Woolway-logo"  class="navbar-brand" href='index.php'>Woolway</a>
    </div>
</nav>
<!-- End -->

<div class="selected_items">
<h2>Selected items</h2>
</div>

<?php

if(!empty($_SESSION['cart'])){

    foreach($_SESSION['cart'] as $key => $value){
        $output="";
        $output .= "
        <div class='cart_item' id='cart_item'>
            <img id='Product-images-cart' src=". $value['image'] ." width='150' height='150'>
            <div class='cart_details'>
                <h4>".$value['name']."</h4>
                <h4>M".number_format($value['price'],2)."</h4>
                <h6>".$value['details']."</h6>
                <form action=''>
                <input type='number' value='1' class='form_number'>
                <input type='hidden' value=".$value['name'].">
                <input type='hidden' value=".number_format($value['price'],2).">
                <input type='hidden' value=".$value['details'].">
                </form><br><hr>
                <div class='text-danger remove_grin'>
                <a href='main.cart.php?action=remove&id=".$value['id']."'>
                <button class='btn btn-danger'>Remove</button>
                </a>
                <p><i class='far fa-grown'></i><p>
                </div>
            </div>
        </div>"
        ;echo $output;
        }
        $paymend="
        <div class='continue_with_payment'>
        <a href='payment.php'><p>continue to pay</p></a>
        
        ";
        echo $paymend;
}
else{
    $output .="<p><i class='far fa-grown'></i></p>";
    echo $output; 
    
}

if (isset($_GET['action'])){
    if($_GET['action']=='remove'){
        foreach($_SESSION['cart'] as $key => $value ){
            if ($value['id']==$_GET['id']){
                unset($_SESSION['cart'][$key]);
            }
        }
    }

}
?>
<!-- Scripts both Jquery and js node -->
<?php include ('scripts.php'); ?>

