<?php
session_start();
error_reporting(0);
global $user1,$pass;
$name=$_POST['name'];
$email=$_POST['email'];
$sq=$_POST['securityquestion'];
$mobile=$_POST['mobile'];
$answer=$_POST['answer'];
$pass=$_POST['pass'];
$user=$_POST['username'];
$passwords=$_POST['password'];
// echo $name."\n".$email."\n".$sq."\n".$mobile."\n".$answer."\n".$password;
$obj=new tbl_user;

if($user)
{
    $obj->login();
}
else
{
    $obj->user();
}
class tbl_user
{
    function login()
    {
        global $user,$pass;
        include "connect.php";
        $sql="SELECT *from tbl_user where mobile='$user' or email='$user'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
         
          while($row = $result->fetch_assoc()) {
            //  echo $row["id"].$row["email"].$row["name"];
            $_SESSION['uname']=$row['name'];
           
            if($row['is_admin']==1)
            {
               
                echo "2";
            }
            // echo $_SESSION['uname'];
            else
            {
              
                echo "1";
            }
           
            
          }
         
        } else {
          echo "0 results";
        }
        $con->close();
   
    }
    function user()
    {
        global $name,$email,$sq,$mobile,$answer,$passwords;
        include "connect.php";
        if(isset($_SESSION['email']))
        {
            $ep=1;
            $mp=0;
        }

        else 
        {
            $ep=0;
            $mp=1;
        }
        $sql="INSERT into tbl_user(email,name,mobile,email_approved,phone_approved,active,is_admin,password,security_question,security_answer) VALUES('$email','$name','$mobile','$ep','$mp',1,0,'$passwords','$sq','$answer')";
        if($con->query($sql)==true)
        {
            echo "1";
            
        } 
        else 
        {
            echo "0";
        }
    }
}





?>