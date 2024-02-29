<?php 
require_once 'home/config.php';

// fetching a logged in user
session_start();
$UserUid = $_SESSION["username"];
$get_user_details = "SELECT * FROM  users WHERE usersUid='$UserUid'";
$user_details_run_query = mysqli_query($connection,$get_user_details);
$user_Assoc_array= mysqli_fetch_assoc($user_details_run_query);

$get_order_details = "SELECT * FROM  ordered_products WHERE order_status='pending'";
$order_details_run_query = mysqli_query($connection,$get_order_details);
$order_Assoc_array= mysqli_fetch_assoc($order_details_run_query);

// redirecton a none logged in user to the registration page
if (!isset($_SESSION['username'])){
    header('location: login.php');
    mysqli_close($connection);
    exit();
  }
include "Templates/headers.php";
?>
<body class='profile-body'>

<nav class='sticky profile-nav'>
<a href="index.php"><i class='fas fa-arrow-left'></i></a>
</nav>
<main>
  <div class='Glass'>
    <div class='dashboard'>
    
      <div class="links">
        <div class="link">
          <i class='fas fa-history'></i>
          <h6 class='history_btn'>History</h6>
        </div>

        <div class="link">
          <i class='fas fa-sliders-h'></i>
          <h6 class="order_btn">Orders</h6>
        </div>

        <div class="link">
          <i class='fas fa-cog'></i>
          <h6 class='order_settings'>Settings</h6>
        </div>
        <hr>
        <div class="link">
          <i class='fas fa-user'></i>
          <?php $user_name = ucfirst($user_Assoc_array['usersName']);?>
          <h6><?php echo $user_name;
          mysqli_close($connection); ?></h6>
        </div>
        <hr>
      </div>
    </div>

    <div class="NOW">
      <div class='now'>
      
      <p>Default</p>
      
      </div>
    </div>
  </div>
</main>

<script>
// selectors
var btn_history = document.querySelector('.history_btn')
var btn_order = document.querySelector('.order_btn')
var btn_settings = document.querySelector('.order_settings')

// Event handlers
btn_history.addEventListener('click',history)
btn_order.addEventListener('click',order)
btn_settings.addEventListener('click',settings)

// functions
function history(){
    var Dom = document.querySelector('.now')
    Dom.innerHTML = '<?php
              while($row= mysqli_fetch_assoc($order_details_run_query)){
              echo '<p>'.$row['product_name'].'</p>';
              echo '<hr>';
              }
          ?>
          <p>Total M2345</p>'
}
function settings(){
    var Dom = document.querySelector('.now')
    Dom.innerHTML = '<?php echo '<p>Change Password</p>';
                           echo '<form>';
                           echo '<input type="text" name="currrent_pwd" placeholder="current password"> <br><br>';
                           echo '<input type="text" name="currrent_pwd" placeholder="new password"> <br><br>';
                           echo '<input type="text" name="currrent_pwd" placeholder="confirm password"> <br>';
                           echo '</form>';
                      ?>'
}
function order(){
    var Dom = document.querySelector('.now')
    var name =  "<?php echo $user_Assoc_array['userEmail'];?>";
    Dom.innerText = 'Order';
    console.log('btn clicked')
}
</script>
</body>