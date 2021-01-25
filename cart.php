<?php

require_once("header.php");

if(!isset($_SESSION['cart']))
{
    header("location:index.php");
}




?>

<?php 		
          
                // $p=$_REQUEST['p_id'];
                // echo $p;
            
         ?>		
        
<div class="container">	
<div class="row">
    <div class="col">
        <table id="myTable" class="table table-striped">
            <thead>
                <tr><th>Id</th><th>Name</th><th>Plan</th><th>Price</th><th>SKU</th><th>Action</th></tr>
            </thead>
            <tbody>
                <?php $a=$_SESSION['cart'];
    
                    foreach($a as $key=>$value)
                    {
                        echo "<tr>";
                        $id=$key;
                        foreach($value as $key=>$value1)
                        {
                            echo "<td>".$value1."</td>";
                    
                       
                        }
            
                        echo "<td><button type='button' class='btn btn-danger sdelete' data-id='$id' >Delete</button></td></tr>";
                    }
                
                ?>
                
            </tbody>
        </table>
    </div>

</div>
<div class="row">
                    <div class="col-sm-3 ">
                    <?php if(isset($_SESSION['user'])):?>
                    <?php echo '<a href="payment.php" class="btn btn-success"  type="button">Proceed to checkout</a>';?>
                    <?php endif;?>
                    <?php if(!isset($_SESSION['user'])):?>
                    <?php echo '<a href="login.php" class="btn btn-success"  type="button">Proceed to checkout</a>';?>
                    <?php endif;?>
                    </div>
</div>
</div>
<br>
<?php
require_once("footer.php");
?>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
