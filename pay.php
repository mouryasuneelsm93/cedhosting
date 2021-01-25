<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once("header.php");?>
<div class="container">
<div class="row">
<div class="col-sm-4">
<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script>paypal.Buttons(
{
    style:{
        color:'blue',
        shape:'pill',
    },
    createorder:function(data,action)
    {
       
        return action.order.create({
            purchase_units:[{
                amount:{
                    value:'100'
                }
            }]
        });
    },
    onApprove:function(data,action){
        return action.order.capture().then(function(details){
            // console.log(details);
            //window.location.href="success.php";
            $.ajax({
                type:'POST',
                url:'admin/adminhelper.php',
                data:{'details':details,'action':'pay'},
                success:function(data){
                    console.log(data);
                    if(data==1)
                    {
                        
                        window.location.href="success.php"
                    }
                    else
                    {
                        alert("something went wrong");
                    }
                }
            })
            
        })
    },
    onCancel:function(data,action){
        return action.order.capture().then(function(details){
            console.log(details);
           window.location.href="index.php";
        })
    }
    
}

).render('body');</script>
</div>
</div>

</div>
    <?php require_once("footer.php");?>
</body>
</html>