<?php
session_start();
require_once('product.php');

$action=$_POST['action'];
echo $action;
$details=$_POST['details'];
foreach($details as $key=>$value)
{
    echo $value;
    foreach($value as $key=>$value1)
    {
        echo $value1;
    }
}
// print_r($details);
$obj=new Product;
switch($action)
{
    case 'edit':        
        $productname=$_POST['productname'];
        $link=$_POST['editor'];
        $result=$obj->create($productname,$link);
        echo $result;
    break;
    case 'del':            
        $prod_id=$_POST['prod_id'];  
            $result=$obj->del($prod_id);
            echo $result;
    break;
    case 'update':            
        $prod_id=$_POST['id']; 
        echo $prod_id;
        $productname=$_POST['productname'];
        $link=$_POST['editor'];
   
        $result=$obj->update($prod_id,$productname,$link);
        echo $result;
    break;

    case 'addproduct':
        $productcategory=$_POST['productcategory'];
        $productname=$_POST['productname'];
        $pageurl=$_POST['pageurl'];
        $monthlyprice=$_POST['monthlyprice'];
        $annualprice=$_POST['annualprice'];
        $sku=$_POST['sku'];
        $webspace=$_POST['webspace'];
        $bandwidth=$_POST['bandwidth'];
        $freedomain=$_POST['freedomain'];
        $languagetechnology=$_POST['languagetechnology'];
        $mailbox=$_POST['mailbox'];
        $result=$obj->addproduct($productcategory,$productname,$pageurl,$monthlyprice,$annualprice,$sku,$webspace,$bandwidth, $freedomain,$languagetechnology,$mailbox);
        // echo $productcategory.$productname.$productname. $monthlyprice.$annualprice.$sku. $bandwidth.$freedomain.$languagetechnology.$mailbox;
        echo $result;
    break;
    case 'pro':       
        $_SESSION['cart'][]=[$_POST['pd_id'],$_POST['name'],$_POST['ap'],$_POST['mp'],$_POST['sku']];
        // print_r($_SESSION['cart']);   
    break;
    case 'pack':
        $pa=$_POST['pack'];
        
        if($pa=="Monthly Pack")
        {
            $mp=$_POST['mp'];
            echo $mp;
            unset($_SESSION['cart']["mp"]);
            print_r($_SESSION['cart']);
        }
        else
        {
            $ap=$_POST['ap'];
            echo $ap;
            unset($_SESSION['cart']["ap"]);
            print_r($_SESSION['cart']);
        }
}









?>