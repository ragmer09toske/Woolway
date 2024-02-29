<?php
$username = "root";
$server = "localhost";
$password = "";
$database = "woolwayDB";
$connection = mysqli_connect($server,$username,$password,$database);

if(!$connection){
    die("connectionfailed: ".mysqli_connect_error());
}