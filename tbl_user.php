<?php
require_once("config.php");
session_start();

class User extends dbcon
{
    public $con;
    public $user;
    public $pass;
    public $name;
    public $email;
    public $sq;
    public $mobile;
    public $answer;
    public $passwords;
    public $phone_approved;
    public $email_approved;
    
    function __construct()
    {
        $obj=new dbcon;
        $this->con=$obj->con;
    }
    function login($user,$pass)
    {
        $this->user=$user;
        $this->pass=$pass;
        $sql="SELECT *from tbl_user where email='$this->user' AND password='$this->pass'";
        $result =$this->con->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['is_admin']==1) {
                    $_SESSION['admin']=$row['name'];
                    $res="1";
                } else {
                    $_SESSION['user']=$row['name'];
                    $res="0";
                }
            }
        } else {
            return "0 results";
        }
        return $res;
    }
    function insert($name,$email,$sq,$mobile,$answer,$passwords,$phone_approved,$email_approved)
    {
        $this->name=$name;
        $this->email=$email;
        $this->sq=$sq;
        $this->mobile=$mobile;
        $this->answer=$answer;
        $this->passwords=$passwords;
        $this->phone_approved=$phone_approved;
        $this->email_approved=$email_approved;
        
        $sql="INSERT into tbl_user(email,name,mobile,email_approved,phone_approved,active,is_admin,password,security_question,security_answer)
         VALUES('$this->email','$this->name','$this->mobile','$this->phone_approved','$this->email_approved',1,0,'$this->passwords','$this->sq','$this->answer')";
        if($this->con->query($sql)==true)
        {
            $res= "1";
            
        } 
        else 
        {
            $res= "0";
        }
        return $res; 
    }
    
}

class linux extends dbcon
{
    function title()
    {
        
        $titlename=mysqli_fetch_assoc($this->con->query("SELECT `prod_name` FROM `tbl_product` where `id`=2"));
        return $titlename;
    }
    function linuxhosting()
    {
        
        $sql="SELECT * from tbl_prod_description";
        $result=$this->con->query($sql);
        if($result->num_rows>0)
        {
            while($res=$result->fetch_assoc())
            {
                $a= $res['pid'];
                
            }   
            return $a;
        }
        else 
        {
            return 0;
        }
        $this->con->close();
    }
}


?>