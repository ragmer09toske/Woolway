<?php 

if (isset($_POST["submit"])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['uid']) && !empty($_POST['pwd']) && !empty($_POST['repeatpwd']) ){
        $name      = $_POST["name"];
        $email     = $_POST["email"];
        $repeatpwd = $_POST["repeatpwd"];
        $pwd       = $_POST["pwd"];
        $uid       = $_POST['uid'];

        require_once "home/config.php";
        $WoolUser_query  = "SELECT * FROM users where usersUid='$uid'";
        $WoolUser_exists = mysqli_query ($connection,$WoolUser_query);
        $count           = mysqli_num_rows($WoolUser_exists);
        // ....................Error handlers..........................//
        require_once 'functions.php';
        if($count>0 ){
            header("location: register.php?userExists");
            mysqli_close($connection);
            exit();
        }
        if(pwdNotsame($pwd,$repeatpwd) != false){
            header("location: register.php?passwords_do_not_much");
            exit();
        }
        insertuser($connection,$name,$email,$uid,$pwd);
        // ....................Error handlers..........................//
    }else {
        echo  "all fields required";
    }
}
