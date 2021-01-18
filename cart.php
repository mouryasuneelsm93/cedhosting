<?php
session_start();
require_once("header.php")

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
                <tr><th>Id</th><th>Name</th><th>Annual Price</th><th>Monthly Price</th><th>SKU</th><th>Action</th></tr>
            </thead>
            <tbody>
                <?php $a=$_SESSION['cart'];
                $count=0;
                    foreach($a as $key=>$value)
                    {
                        echo "<tr>";
                        foreach($value as $key=>$value1)
                        {
                            echo "<td>".$value1."</td>";
                       
                        }
                        $count++;
                        echo "<td><button type='button' class='btn btn-danger'>Delete</button></td></tr>";
                    }
                
                $_SESSION['count']=$count;
                ?>
                
            </tbody>
        </table>
    </div>

</div>
<div class="row">
                    <div class="col-sm-3">

                   <div id="payment">
                   </div>
                    </div>
</div>
</div>
<h1 id="details"></h1>
<script src="https://www.paypal.com/sdk/js?client-id=AeoPZFf336eGKc_rrixhi1BxDzgkGpPebDvLXoVz6XV5ynHF_nUOIyFQ9wT1_T3OaVq6pFxSjW8a7wFd"></script>
<script src="ajax.js">



</script>
<?php
require_once("footer.php");
?>