<?php
error_reporting(0);
require('../config.php');

class Product extends dbcon
{
    public $con;
    public $productname;
    public $prod_id;
    public $link;
    public $productcategory;
    public $rows =array();
    function __construct()
    {
        $obj=new dbcon;
        $this->con=$obj->con;
    }
    function create($productname,$link)
    {
        
        $this->productname=$productname;
        $this->link=$link;
        $sql="INSERT into tbl_product(prod_parent_id,prod_name,html,prod_available) Values(1,'$this->productname','$this->link',1)";
        if($this->con->query($sql)==true)
        {
            $res='1';
        }
        else
        {
            $res='0';
        }
        return $res;

    }
    function show() 
    {
        $sql="SELECT id,prod_name,html,prod_available FROM tbl_product WHERE prod_parent_id=1";
        $res=$this->con->query($sql);

        if ($res->num_rows > 0) {
            while ($row=$res->fetch_assoc()) {
                $this->rows[]=$row;
            }
            return $this->rows;
        }
        else
        {
        return false; 
        }
    }
    function del($prod_id) 
    {
        $this->prod_id=$prod_id;
        $sql="DELETE FROM `tbl_product` WHERE  id='$this->prod_id'";
        if($this->con->query($sql))
        {
            $res='1';
        }
        else
        {
            $res='0';
        }
        return $this->prod_id;
    
    }
    function update($prod_id,$productname,$link)
    {
        $this->prod_id=$prod_id;
        $this->productname=$productname;
        $this->link=$link;
        // UPDATE 'tbl_product' set 'prod_name'=,'prod_available'=1,'link'=,'prod_parent_id'=0,'prod_parent_name'=) WHERE ";
        $sql="UPDATE tbl_product SET prod_name='$this->productname',link='$this->link' WHERE id='$this->prod_id'";
        
        if($this->con->query($sql)==true)
        {
            $res= '1';
        }
        else
        {
            $res='0';
        }
        return $res;

    }
    function addproduct($productcategory,$productname,$pageurl,$monthlyprice,$annualprice,$sku,$webspace,$bandwidth, $freedomain,$languagetechnology,$mailbox)
    {

        $desc=array(
            'webspace'=>$webspace,
            'bandwidth'=>$bandwidth,
            'freedomain'=>$freedomain,
            'languagetechnology'=>$languagetechnology,
            'mailbox'=>$mailbox);
        $desc=json_encode($desc);
        $sql="SELECT id FROM tbl_product WHERE prod_name='$productcategory'";
        $res=$this->con->query($sql);

        if ($res->num_rows > 0) {
            while ($row=$res->fetch_assoc()) {
                $ids=$row['id'];
                
            }
           
        }
        else 
        {
            return false;
        }
        $sql1="INSERT into tbl_product(prod_name,prod_available,html,prod_parent_id) Values('$productname',1,'$pageurl','$ids')";
               
                 if($this->con->query($sql1)==true)
                {
                    $sql2="INSERT into tbl_product_description(prod_id,description,mon_price,annual_price,sku) Values((SELECT id from tbl_product where prod_name='$productname'),'$desc','$monthlyprice','$annualprice','$sku')";
                    if($this->con->query($sql2)==true)
                    {
                        $res= "1";
                    }
                    else 
                    {
                        $res= "2";
                    }
                }
                 else
                {
                    $res='0';
                }

        return $res;

    }
    function prod_show() 
    {
        $data=array();
        $sql="SELECT * FROM tbl_product INNER JOIN tbl_product_description ON tbl_product.id = tbl_product_description.prod_id";
        $result=$this->con->query($sql);
        if ($result->num_rows > 0) {
            while ($row=$result->fetch_assoc()) {
                $id=$row['prod_parent_id'];
                $catename=mysqli_fetch_assoc($this->con->query("SELECT `prod_name` FROM `tbl_product` where `id`=$id"));
                $cate=$catename['prod_name'];
                // $this->rows[]=$row;
                $desc=json_decode($row['description']);
                $webspace=$desc->{'webspace'};
                $banddwidth=$desc->{'bandwidth'};
                $freedomain=$desc->{'freedomain'};
                $languagetechnology=$desc->{'languagetechnology'};
                $mailbox=$desc->{'mailbox'};
                $data[]=array(
                    'cname'=>$cate,
                    'name'=>$row['prod_name'],
                    
                    'url'=>$row['html'],
                    'monthlyprice'=>$row['mon_price'],
                    'annualprice'=>$row['annual_price'],
                    'sku'=>$row['sku'],
                    'space'=>$webspace,
                    'band'=>$banddwidth,
                    'free'=>$freedomain,
                    'language'=>$languagetechnology,
                    'mailbox'=> $mailbox
                );
            }
            return $data;
        } else {
            return 0;
        }
    }
    

}
?>