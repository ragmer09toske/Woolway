<?php
include_once ("home/config.php");
include ('Templates/headers.php');
include ('nav.php');

session_start();
if(!isset($_SESSION["username"])){
    echo 'login before you proceed';
}else{
    echo '<main>';
    echo "<div class='Glass'>";
    echo "<div class='NOW'>";
    echo '<div class="PAY">';
    echo '<form action="pay.php" method="POST">';
    echo '<label for="size">ADDRESS</label><br>';
    echo '<select type="text" name="address" id="address">';
    echo '<option >BOROKHOANENG</option><br>';
    echo '<option >MASERU WEST</option>';
    echo '<option >TOWN 5</option>';
    echo '<option >MASOWWE</option>';
    echo '<option >KHUBETSWANA</option>';
    echo '<option >MOSHOESHOE2</option>';
    echo '<option >MASERU EAST</option>';
    echo '</select><br><br>';
    echo '<label for="size"> PAYMENT METHOD</label><br>';
    echo '<select type="text" name="Payment_client" id="address"><br>';
    echo '<option >VADACOM MPESA</option>';
    echo '<option >ECONET ECOCASH</option>';
    echo '</select>';
    echo '</div>';
    echo '<pre>';
    echo "";
    echo '</pre>';
    echo '<input type="text" name="mobile_numbers"class="form-control me-2" name="mobile_numbers" placeholder="mobile numbers" required><br>';
    echo '<div class="invalidNumber"></div>';
    echo '<input type="text" class="form-control me-2" name="whatsApp_number" placeholder="WhatsApps numbers" required><br>';
    echo '<div class="invalidWhatsAppNumber"></div>';
    echo '<button type="submit" class="btn-way PAY" name="pay"><h2>PAY</h2><h3><i class="fas fa-money-check-alt"></i></h3></button>';
    echo '</form>';   
    echo '</div>';
    echo '</div>';
    echo '</main>';
    }
?>
<script>
var dom_forms = document.querySelector('.invalidNumber');
function Append_error(e){
    e.preventDefault();
    dom_forms.innerHTML = '<p>enter 8 numbers please!</p>';
}
Append_error();
</script>
<?php
if($_GET['error']=='qeqws'){?>
<script>
 Append_error();
</script>
<?php
}



