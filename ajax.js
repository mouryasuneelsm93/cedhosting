function generate()
{
    var num=$("#mnumber").val();
    console.log(num);
    
    if(num=="")
    {
        alert("please enter mobile number first")
    }
    else if(num.length!=10)
    {
        alert("mobile number must be 10 digit");
    }
    else
    {
        alert("otp has been sent to your mobile number")
        $.ajax({
            type:'POST',
            url:'mobileotp.php',
            data:{'num':num},
            success:function(data){
                console.log(data);
            }
        })
    }
}
function egenerate()
{
    var mail=$("#mail").val();
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    console.log(mail);
    
    if(mail=="")
    {
        alert("please enter email first")
    }
    else if (reg.test(mail) == false) 
    {
        alert('please enter valid Email Address');
        
    }
    else
    {
        alert("otp has been sent to your email address")
        $.ajax({
            type:'POST',
            url:'mailotp.php',
            data:{'mail':mail},
            success:function(data){
                console.log(data);
            }
        })
    }
}

$(document).ready(function()
{
    $('#myTable').DataTable();
})
$(document).ready(function(){
    
    $('#verification').submit(function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'check.php',
        data:$(this).serialize(),
        success:function(data){
            console.log(data);
            if(data=="otp verified")
            {
                alert("otp verified");
                window.location.href="account.php"
            }
            else
            {
                alert("wrong otp"); 
            }
        }
    })
})

$('#signup').submit(function(e){
    e.preventDefault();
    var p=$("#password").val();
    var cp=$("#repassword").val();
    if(p!=cp)
    {
        alert("confirm password did not match");
    }
    else
    {
    $.ajax({
        type:'POST',
        url:'helper.php',
        data:$(this).serialize()+"&action=signup",
        success:function(data){
            console.log(data);
            if(data==1)
            {
                alert("signup successfully");
                window.location.href="login.php";
            }
            else
            {
                alert("something went wrong");
            }

        }
    })
}
})
$('#login').submit(function(e){
    e.preventDefault();
    $.ajax({
        type:'POST',
        url:'helper.php',
        data:$(this).serialize()+"&action=login",
        success:function(data){
            console.log(data);
            if(data==0)
            {
                alert("login successfully");
                window.location.href="index.php";
            }
            else if(data==1)
            {
                
                window.location.href="admin/index.php";
            }
            else
            {
                alert("username or password did not match");
            }

        }
    })

})

$('#create').submit(function(e){
    e.preventDefault();

    $.ajax({
        type:'POST',
        url:'adminhelper.php',
        data:$(this).serialize()+"&action=edit",
        success:function(data){
            console.log(data);
            if(data==1)
            {
                alert("product add");
                window.location.href="../admin/createcategory.php";
            }
        
            else
            {
                alert("wrong");
            }

        }
    })

})
$('#update').submit(function(e){
    e.preventDefault();
     var prod_id = $("#sp").html();
    
    // console.log(id);
    $.ajax({
        type:'POST',
        url:'adminhelper.php',
        data:$(this).serialize()+"&action=update"+"&id="+prod_id,
        success:function(data){
            console.log(data);
            if(data==1)
            {
                alert("update successfully");
                window.location.href="../admin/index.php";
            }
        
            else
            {
                alert("wrong");
            }

        }
    })

})



$('.del').on('click',function()
{
    var x=confirm("Are you sure you want to delete");
    if(x==true)
    {
        var id = $(this).data('id');
        console.log(id);
        $.ajax({
            type:'post',
            data:{'prod_id':id,'action':'del'},
            url:'adminhelper.php',
            success:function(data){
                console.log(data);
            }
        })
    }
   else
   {

   }
    
});


$('.edit').on('click',function()
{
    var id = $(this).data('id');
    var name = $(this).data('name');
    var link = $(this).data('link');
    console.log(id,name,link);
    document.getElementById("sp").innerHTML=id;
    document.getElementById("uproductname").value=name;
    document.getElementById("ueditor").value=link;
    
})


$('#addproduct').submit(function(e){
    e.preventDefault();
   
    $.ajax({
        type:'POST',
        url:'adminhelper.php',
        data:$(this).serialize()+"&action=addproduct",
        success:function(data){
            console.log(data);
            if(data==1)
            {
                alert("product added")
                window.location.href="../admin/index.php";
            }

        }
    })
})
$(".pro").on('click',function(){

    var id = $(this).data('id');
    var name = $(this).data('name');
    var ap = $(this).data('ap');
    var mp = $(this).data('mp');
    var sku = $(this).data('sku');
    $("#get").html(id);
    $("#mp").html(mp);
    $("#ap").html(ap);
    console.log(id,name,ap,mp,sku);
    $.ajax({
        type:'POST',
        url:'admin/adminhelper.php',
        data:{'pd_id':id,'name':name,'ap':ap,'mp':mp,'sku':sku,'action':'pro'},
        
        success:function(data){
            console.log(data);
            // window.location.href="cart.php";
        }
    })
   
});

$("#pack").on('click',function(){
    var mp=$("#mp").text();
    var ap=$("#ap").text();
    var pack = $("#select").val();
    // console.log(pack);
     console.log(ap);
     console.log(mp);
    // console.log(id);
    $.ajax({
        type:'POST',
        url:'admin/adminhelper.php',
        data:{'action':'pack','pack':pack,'mp':mp,'ap':ap},
        
        success:function(data){
            console.log(data);
            // window.location.href="cart.php";
        }
    })
});
})


paypal.Buttons({

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
                data:{'details':details},
                success:function(data){
                    console.log(data);
                }
            })
            
        })
    },
    onCancel:function(data,action){
        return action.order.capture().then(function(details){
            console.log(details);
           // window.location.href="success.php";
        })
    }
    
    
         }).render('#payment');
    
    

