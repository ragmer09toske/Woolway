<?php
include 'products.handler.php';
?>
<!-- PRODUCTS PRESENTATION IN THE MAIN CONTENT-->
<div class="main-contant">
  <div class="small-container">  
      <?php
      if (isset($search)){
        echo '<h2 class="tittle">'.$search.'</h2>';
      }else{
        if(isset($_GET['choice'])){
          echo '<h2 class="tittle">'.$_GET["choice"].'</h2>';
        }else{
          echo '<h2 class="tittle">Featured Products</h2>';
          }
      }
      ?>
      <!----------------------------- the index view ----------------------------->
        <div class='row'>
          <?php
              while($row=mysqli_fetch_assoc($products)){
              echo '<div class="col-4">';
              echo '<form method="POST" action="cart.inc.php?id='.$row["ID"].'">';
              echo '<img id="Product-images" src="'. $row["image"].'">';
              echo '<h6>'.$row["tittle"].' <i class="far fa-heart"></i> <i class="far fa-comment"></i></h6>';
              echo '<p>Now: M'.number_format($row["price"],2).'</p>';
              echo '<div class="btn-container">';
              echo '<button type="submit" name="submit" class="btn-way">ADD TO CART</button> ';
              echo '</div>';
              echo "</form>";
              echo "</div>";
              }
          ?>
        </div>
      <!----------------------------- the index view ----------------------------->
  </div>
</div>