<?php

class dbcon
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $con;
    function __construct($servername="localhost", $username="root", $password="", $dbname="cedhosting")
    {
        $this->servername=$servername;
        $this->username=$username;
        $this->password=$password;
        $this->dbname=$dbname;
        $this->con=mysqli_connect($servername, $username, $password, $dbname);
      
    }
}


// $servername="localhost";
// $username="root";
// $password="";
// $dbname = "cedhosting";

// $con=mysqli_connect($servername,$username,$password,$dbname);

// if(!$con)
// {
// die("connection failed".mysqli_connect_error());
// }





?>