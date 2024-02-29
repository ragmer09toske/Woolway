<?php
function pwdNotsame($pwd,$repeatpwd){
    if ($pwd != $repeatpwd){
    return true;
        }else{
            return false;
        }
}
function insertuser($connection,$name,$email,$uid,$pwd){
    $user_insertion = "INSERT INTO users(usersName,userEmail,usersUid,userPwd) VALUES('$name','$email','$uid','$pwd')";
    $run_insert     = mysqli_query($connection,$user_insertion);
    if($run_insert){
        header("location: index.php");
        mysqli_close($connection);
        exit();
    }
}
