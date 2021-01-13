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
        url:'tbl_user.php',
        data:$(this).serialize(),
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
        url:'tbl_user.php',
        data:$(this).serialize(),
        success:function(data){
            console.log(data);
            if(data==1)
            {
                alert("login successfully");
                window.location.href="index.php";
            }
            else if(data==2)
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
        url:'create.php',
        data:$(this).serialize(),
        success:function(data){
            console.log(data);
        

        }
    })

})
})