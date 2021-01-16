<?php
session_start();
require_once('product.php');

$_SESSION['cart'][]=[$_POST['pd_id'],$_POST['name'],$_POST['ap'],$_POST['mp'],$_POST['sku']];
print_r($_SESSION['cart']);
 
$action=$_POST['action'];
echo $action;
$_SESSION['p_id']= $_POST['p_id'];
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
    case 'pack':
     
       
        
    break;
}









?>