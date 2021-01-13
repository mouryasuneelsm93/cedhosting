<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<style>
 button:hover{
     background-color: blueviolet;
 }
 /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
    </style>
</head>
<body>
    <?php include "header.php";?>
   	<!---login--->
       <div class="content">
				<!-- registration -->
	<div class="main-1">
		<div class="container">
        <div class="register">
                <form  method="post"  id="verification"> 
            
                        <div class="row pb-3">
                           <div class="col-sm-4">
                           <h3 style="color:#7277D5;">Enter Your Mobile Number</h3><br>
                            <input type="number" id="mnumber" name="number" onkeypress="if(this.value.length==10) return false;"  placeholder="please enter mobile number" class="form-control"> 
                           <br>
                            <input type="button" value="Generate OTP" onclick="generate()" name="submit" class="btn btn-warning" style="background-color: #e7663f;">
            
                        </div>
                        <div class="col-sm-4 text-center">
                            <h1 style="color:#7277D5;font-size:80px;"></h1>
</div>
                        <div class="col-sm-4">
                           <h3 style="color:#7277D5;">Enter Your Email Address</h3><br>
                            <input type="email" id="mail" name="mail"  placeholder="please enter email address" class="form-control"> 
                           <br>
                            <input type="button" value="Generate OTP" onclick="egenerate()" name="submit" class="btn btn-warning" style="background-color: #e7663f;">
            
                        </div>
                        </div>  
                        <br>
                        <div class="row">
                           <div class="col-sm-4">
                           <h3 style="color:#7277D5;">Enter OTP</h3><br>
                            <input type="number" name="otp" placeholder="Enter OTP" onkeypress="if(this.value.length==4) return false;" class="form-control"> 
                        </div>
                        <div class="col-sm-4 text-center">
                           
</div>
                        <div class="col-sm-4">
                           <h3 style="color:#7277D5;">Enter OTP</h3><br>
                            <input type="number" name="eotp" placeholder="Enter OTP" onkeypress="if(this.value.length==4) return false;"  class="form-control"> 
                        </div>
                        </div>
                        <br>
                        <div class="row">
                           <div class="col-sm-4">
                         
                           <input type="submit" value="Verify" name="submit" class="btn btn-warning" style="background-color: #e7663f;">
                        </div>
                        <div class="col-sm-4 text-center">
                           
</div>
                        <div class="col-sm-4">
                          
                           <input type="submit" value="Verify" name="submit" class="btn btn-warning" style="background-color: #e7663f;">
                        </div>
                        </div>
                        
                <!-- <div class="clearfix"> </div>
                <div class="register-but">
                        <input type="submit" value="Verify" name="submit" class="btn btn-warning" style="background-color: #e7663f;">
                        <div></div>
                        <div class="error-msg"></div>
                        <div class="clearfix"> </div>
                    
                </div> -->
            
            </form>
            </div>
		  	  	
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login --><?php include "footer.php";?>
</body>
</html>


<script src="ajax.js">

    </script>
