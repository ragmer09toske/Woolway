<!DOCTYPE html>
<?php 
include 'Templates/headers.php';

if(!empty($_SESSION['cart'])){

    foreach($_SESSION['cart'] as $key => $value){
        $totall_price += $value['price'];
    }
}

?>

<body>
    <nav class='sticky'>
        <a href="payment.php"><i class='fas fa-arrow-left'></i></a>
    </nav>
    <div class='form-wreper'>
        <?php if($_POST['Payment_client']=='VADACOM MPESA'){
            echo '<h6> step 1 </h6><br>';
            echo 'Go to your Phone Dial <br>';
            echo '<h6> step 2 </h6><br>';
            echo 'Go to your Mpesa <br>';
            echo '<h6> step 3 </h6><br>';
            echo 'Pay Marchent "12345" <br>';
            echo 'Pay Total: M' . $totall_price .'<br>';
            echo '<h6> step 4 </h6><br>';
            echo 'Take a Screenshot of the Comfirmation Message <br>';
            echo '<h6> Step 5 </h6><br>';
            echo 'Send us the Image on WhatsApp: <br> <h4>58867250</h4>';
        }else{
            echo '<h6> step 1 </h6><br>';
            echo 'Go to your Phone Dial <br>';
            echo '<h6> step 2 </h6><br>';
            echo 'Go to your Ecocash <br>';
            echo '<h6> step 3 </h6><br>';
            echo 'Pay Marchent "12345" <br>';
            echo 'Pay Total: M' . $totall_price .'<br>';
            echo '<h6> step 4 </h6><br>';
            echo 'Take a Screenshot of the Comfirmation Message <br>';
            echo '<h6> Step 5 </h6><br>';
            echo 'Send us the Image on WhatsApp: <br> <h4>58867250</h4>';
        }
        ?>
        <hr>
        <form action='pay.inc.php' method='POST'>
        <p>Click <button type='submit' class="btn-way" name='submit'>DONE</button> if you done!</p>
        </form> 
    </div>
    <?php
        $_SESSION['$totall_price']    = $totall_price;
        $_SESSION['$payment_method']  = $_POST["Payment_client"];
        $_SESSION['$address']         = $_POST["address"];
        $_SESSION['$mobile_numbers']  = $_POST["mobile_numbers"];
        $_SESSION['$whatsApp_number'] = $_POST["whatsApp_number"];

        // Error handling for payment.php forms
        function checkValidNum($number){
            if (strlen($number)!=8){
                return true;
            }else{
                return false;
            }
        }
        
    ?>
</body>
</html>
