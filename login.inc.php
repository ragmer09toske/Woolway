<?php
require_once "home/config.php";
if(isset($_POST['submit'])){
if(!empty($_POST['name'])&&!empty($_POST['pwd'])){
    $name=$_POST['name'];
    $pwd =$_POST['pwd'];
    $WoolUser_query = "SELECT * FROM users where usersUid='$name' or userEmail='$name' and userPwd='$pwd'";
    $WoolUser       = mysqli_query ($connection,$WoolUser_query);
    $count          = mysqli_num_rows($WoolUser);
    if($count>0){
            $fetch_username_query = "SELECT * FROM users WHERE usersUid='$name' or userEmail='$name' AND userPwd='$pwd'" ;
            $fetch_username = mysqli_query ($connection,$fetch_username_query);
            $username=mysqli_fetch_assoc($fetch_username);
            session_start();
            //..........................................//
            $_SESSION["username"]= $username['usersUid']; 
            header('location: index.php');
            exit();
    }else{               
            header('location: login.php?wrongUsernameOrpassword');
            ?>
            <script>
                alert("login failed");
            </script>
            <?php
            //..........................................//
        }
}else{
    header ("location: login.php");
    exit();
}  
}
exit();