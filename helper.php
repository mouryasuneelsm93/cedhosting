<?php
require_once("tbl_user.php");
$obj=new User;
$action=$_POST['action'];

switch($action)
{
    case 'login':
        $user=$_POST['username'];
        $pass=$_POST['pass'];
        $result=$obj->login($user,$pass);
        echo $result;
    break;

    case 'signup':
        if(isset($_SESSION['email']))
        {
            $email_approved=1;
            $phone_approved=0;
        }
        else
        {
            $email_approved=0;
            $phone_approved=1;
        }
        $name=$_POST['name'];
        $email=$_POST['email'];
        $sq=$_POST['securityquestion'];
        $mobile=$_POST['mobile'];
        $answer=$_POST['answer'];
        $passwords=$_POST['password'];
        $result=$obj->insert($name,$email,$sq,$mobile,$answer,$passwords,$email_approved,$phone_approved);
        echo $result;
}




?>