<?php 
include "Templates/headers.php";
?>
<body class='profile-body'>

<nav class='sticky profile-nav'>
<a href="index.php"><i class='fas fa-arrow-left'></i></a>
</nav>
<main>
    <div class='Glass'>
    <?php
    session_start();
    $_SESSION['$mobile_numbers'] = $number;
    $_SESSION['$whatsApp_number'] = $whatsApp_number; 
    if($_GET['qky']=='xbx'){
        ErrorMessage();
        if(is_numeric($number) == false){
        echo 'the mobile number is not valide';
        }
    }else{
        if($_GET['qky']=='qwew'){
            echo    '<div class="NOW">';
            echo        "<div class='now-way'>";
            echo            '<h5>Thank you</h5>';
            echo            '<h5>We will get to you soon</h5>';
            echo        '</div>';
            echo    '</div>';
            if(checkValidNum($number) != true){
            echo 'the mobile number is not valide';
            }else{
                echo 'the mobile number is valide';
            }
        }
    }

    function ErrorMessage(){
        echo    '<div class="NOW">';
        echo        "<div class='now-way'>";
        echo            '<h5>The order seems not to have went through</h5>';
        echo            '<p>Please make sure you provided valid numbers</p>';
        echo            '<p>Do not insert the Country cout (+266)</p>';
        echo        '</div>';
        echo    '</div>';
    }
    function checkValidNum($number){
        if (strlen($number)!=8){
            return true;
        }else{
            false;
        }
    }
    ?>
  </div>
</main>