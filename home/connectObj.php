<?php
class DBcontroller{
    // database connection  properties
    protected $host="localhost";
    protected $user="root";
    protected $password="";
    protected $database="woolwayDB";

    // connection property
    public $con=null;

    // call constructor
    public function __construct(){
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if($this->con->connect_error){
            echo "Fail",$this->con->connect_error;
            }
    }
    
}
//DBcontroller object
$db = new DBcontroller();
?>