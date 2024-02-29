<?php 
    require_once "home/config.php";
    session_start();
    // fetching a logged in user
    $UserUid = $_SESSION["username"];
    $get_user_details = "SELECT * FROM  users WHERE usersUid='$UserUid'";
    $user_details_run_query = mysqli_query($connection,$get_user_details);
    $user_Assoc_array= mysqli_fetch_assoc($user_details_run_query);
    
    if(isset($_POST["submit"])){
        $totall_price    = $_SESSION['$totall_price'];
        $usersName       = $user_Assoc_array['usersName'];
        $emial           = $user_Assoc_array['userEmail'];
        $payment_method  = $_SESSION['$payment_method'];
        $address         = $_SESSION['$address'];
        $mobile_numbers  = $_SESSION['$mobile_numbers'];
        $whatsApp_number = $_SESSION['$whatsApp_number'];
        
        $order_insertion = "INSERT INTO orders(usersName,WoolAddress,payment_method,WhatsAPP_number,Phone_number,email,total_price) VALUES('$usersName','$address','$payment_method','$whatsApp_number','$mobile_numbers','$emial','$totall_price')";
        $run_insert = mysqli_query($connection,$order_insertion);

        if($run_insert){
            header('location: way.php?qky=qwew');
            mysqli_close($connection);
            exit();
        }else{
            header('location: way.php?qky=xbx');
            mysqli_close($connection);
            exit();
            }

        if(!empty($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $key => $product){
                $product_name = $product['name'];
                $order_status  = 'pending';
                $ID = $product['id'];                

                $product_insertion = "INSERT INTO ordered_products(order_status,ID,product_name) VALUES('$order_status','$ID','$product_name')";
                $run_insert = mysqli_query($connection,$product_insertion);
                
                if($run_insert){
                //    fuck! i figured this shit out
                }else{
                        echo 'did not run product insertion';
                    }
            }   
        }
    }
?>