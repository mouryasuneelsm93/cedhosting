<?php
session_start();
require_once('product.php');

$action=$_POST['action'];


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
            // unset($_SESSION['cart']["mp"]);
            // session_destroy(['cart']["ap"]);
            print_r($_SESSION['cart']);
        }
        else
        {
            $ap=$_POST['ap'];
            echo $ap;
            unset($_SESSION['cart']["mp"]);
            print_r($_SESSION['cart']);
        }
    break;
    case 'pay':
        $details=$_POST['details'];
        $payer_id=$details['payer']['payer_id'];
        $CountryName=$details['purchase_units'][0]['shipping']['address']['country_code'];
        $Name=$details['purchase_units'][0]['shipping']['name']['full_name'];
        $pincode=$details['purchase_units'][0]['shipping']['address']['postal_code'];
        $HouseNo=$details['purchase_units'][0]['shipping']['address']['address_line_1'];
        $city=$details['purchase_units'][0]['shipping']['address']['admin_area_2'];
        $state=$details['purchase_units'][0]['shipping']['address']['admin_area_1'];
        $result=$obj->billinginsert($payer_id,$CountryName,$Name,$pincode,$HouseNo,$city,$state);
        // echo $result;
        if($result==1)
        {
            session_destroy();
            echo "1";
        }
        else 
        {
            echo "0";
        }
    break;
}









?>