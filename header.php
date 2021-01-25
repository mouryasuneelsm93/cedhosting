<?php

session_start();

require "config.php";
require 'admin/product.php';
$obj =new Product;
$result=$obj->hosting();

?>
<!DOCTYPE HTML>
<html>
<head>
<title>cedhosting</title>
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
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<script src="ajax.js"></script>
</head>
<body>
       <div class="header">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<i class="sr-only">Toggle navigation</i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
								<i class="icon-bar"></i>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php">Planet Hosting</a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li><a href="about.php">About</a></li>
								
								<li><a href="services.php">Services</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
									<?php foreach($result as $key=>$value): ?>
                                <?php if (!($value['prod_name']=='Hosting')) :?>
                                <li><a href="linuxhosting.php?id=<?php echo $value['id'];?>"><?php echo $value['prod_name']?></a>
                                </li>
                                <?php endif; ?>
                                <?php endforeach;?>
									</ul>			
                                </li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact</a></li>
								<li><a href="cart.php"><i class="fas fa-shopping-cart" aria-hidden="true"><span class="badge badge-primary"><?php if(isset($_SESSION['cart'])) {
                                    echo count($_SESSION['cart']);
                                }?></span></i></a></li>
								<?php if(!isset($_SESSION['user'])):?>
                                <?php echo '<li><a href="login.php">Login</a></li>';?>
								<?php endif;?>
								<?php if(isset($_SESSION['user'])):?>
									<li class="dropdown">
                                <?php echo '<a href="" class="dropdown-toggle" data-toggle="dropdown"> '.$_SESSION['user'].'</a>';?>
								
								<ul class="dropdown-menu"><li>
								<?php echo '<a href="">Dashboard</a></li><li><a href="logout.php">Logout</a>';?>
								</li></ul></li>
								<?php endif;?>
	
  </div>
							</ul>
									  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
    
</body>
</html>
