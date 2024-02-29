<nav class='sticky'>
<div class="body">
  <div id="jumbotron">
    <div class="cart-holder">
    <a  href="main.cart.php" ><img src="shoping/shopping_bag.png"></a>
    <div class='space-fool'>
    <p class="text-cart ">
      <?php  if(!empty($_SESSION['cart'])){
        $Num_of_products = sizeof($_SESSION['cart']);
        echo $Num_of_products;
        }
        ?>
    </p>
    <div>
    </div>
  </div>          
</div>
</nav>


      