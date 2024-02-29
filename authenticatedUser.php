<?php include_once ("home/config.php");?>

  <!-- headers -->
  <?php include ('Templates/headers.php'); ?>
  <!-- Woolway's navagation -->

  <?php include ('nav.php'); ?>
  <?php include ("logoutnavbar.php");?>

  <?php include ('cart.php');?>

  <!-- Woolway container -->
  <?php include ('container.php'); ?>
  <?php include ('products.php'); ?>

  <!-- Scripts both Jquery and js node -->
  <?php include ('scripts.php'); ?>

  <!-- Footer -->
  <?php include ('footer.php'); ?> 
<?php mysqli_close($connection);?>