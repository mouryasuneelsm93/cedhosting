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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--lightboxfiles-->
<script type="text/javascript">
	$(function() {
	$('.team a').Chocolat();
	});
</script>	
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
						<script type="text/javascript">
							$(function() {
							
								$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

							});
						</script>						
<!--script-->

<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<style>
 button:hover{
     background-color: blueviolet;
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
                <form action="account.php" method="post" onsubmit="return(validateForm());"> 
                    <div class="register-top-grid">
                        <h3>personal information</h3>
                        <h5 style="color:red;">* mandatory fields</h5>
                        <div>
                            <span>Name<label>*</label></span>
                            <input type="text" name="name" id="name" required="" class="form-control"> 
                        </div>
                        <div>
                            <span>Email Address<label>*</label></span>
                            <input type="email" name="email" id="email" required="" class="form-control"> 
                        </div>
                        <div>
                            <span>Security Question<label>*</label></span>
                            <select id="security-question" name="securityquestion" class="form-control" style="width:38.5vw;"> 
                                <option value="Please select security question">Please select security question</option>
                                <option value="What was your childhood nickname?">What was your childhood nickname?</option>
                                <option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
                                <option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
                                <option value="What was your dream job as a child?">What was your dream job as a child?</option>
                                <option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
                            </select>
                        </div>
                        <div>
                            <span>Mobile  (minimum 10 digits required)<label>*</label></span>
                            <input type="number" name="mobile" id="mobile" required="" class="form-control"> 
                        </div>
                        <div id="answer-signup">
                            <span>ANSWER<label>*</label></span>
                            <input type="text" name="answer" id="answer" class="form-control"> 
                        </div>
                        <div class="clearfix"> </div>
                        <a class="news-letter" href="#">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                        </a>
                        </div>
                        <div class="register-bottom-grid">
                            <h3>login information</h3>
                                <div>
                                <span>Password<label>*</label></span>
                                <input type="password" name="password" id="password" required="">
                                <span id="error-password"> (Password should be atleast one upper case one lower case (min-8 characters))</span>
                                </div>
                                <div>
                                <span>Confirm Password<label>*</label></span>
                                <input type="password" name="repassword" id="repassword" required="">
                                </div>
                        </div>
                <div class="clearfix"> </div>
                <div class="register-but">
                        <input type="submit" value="submit" name="submit" class="btn btn-warning" style="background-color: #e7663f;">
                        <div></div>
                        <div class="error-msg"></div>
                        <div class="clearfix"> </div>
                    
                </div></form>
            </div>
		  	  	
		   </div>
		 </div>
	</div>
<!-- registration -->

			</div>
<!-- login --><?php include "footer.php";?>
</body>
</html>