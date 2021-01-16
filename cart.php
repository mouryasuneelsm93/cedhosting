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
                $i=0;
                    foreach($a as $key=>$value)
                    {
                        echo "<tr>";
                        foreach($value as $key=>$value1)
                        {
                            echo "<td>".$value1."</td>";
                       
                        }
                        $i++;
                        echo "<td><button type='button' class='btn btn-danger'>Delete</button></td></tr>";
                    }
                echo "total request".$i;
                ?>
                
            </tbody>
        </table>
    </div>

</div>
</div>


<?php
require_once("footer.php");
?>