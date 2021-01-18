


<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Linux Hosting :: w3layouts</title>
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

<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
<!--script-->

<style>

.col-sm-3 {
    width: 25%;
    margin: 10px;
}
</style>
</head>

<body>
	<!---header--->
	<?php include "header.php";
	 
	$result1=$obj->prod_show();
	
	?>
	<!---header--->
		<!---singleblog--->
				<div class="content">
					<div class="linux-section">
						<div class="container">
							<div class="linux-grids">
								<div class="col-md-8 linux-grid">
								<h2>
								
								<?php $id =$_GET['id'];
								 foreach($result as $key=>$value): ?>
                                <?php if ($value['id']==$id) :?>
                                <?php echo $value['prod_name']?>
                                
                                <?php endif; ?>
                                <?php endforeach;?>
				</h2>
								<ul>
									<li><span>Unlimited </span> Domains, Disk Space, Bandwidth and Email Addresses</li>
									<li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>
									<li><span>Powered by </span> CloudLinux, cPanel (demo), Apache, MySQL, PHP, Ruby & more</li>
									<li><span>Launch  </span> your business with Rs. 2000* Google AdWords Credit *</li>
									<li><span>30 day </span> Money Back Guarantee</li>
								</ul>
									<a href="#">view plans</a>
								</div>
								<div class="col-md-4 linux-grid1">
									<img src="images/linux.png" class="img-responsive" alt=""/>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<div class="tab-prices">
						<div class="container">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
									<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IN Hosting</a></li>
									<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">US Hosting</a></li>
									</ul>
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
										<div class="linux-prices">
										<div class="col linux-price">
											
												
											<?php	foreach($result1 as $key=>$value): ?>
												
												<?php if($id==$value['id']):?>
												<div class="col-sm-3 mx-5 linux-bottom">
												<?php $name= $value['name'];$pid =$value['ids'];?> 
												
												<h6><?php echo $value['name'];?></h6>
												<h5>$<?php echo $value['annualprice'];?><span class="month">per year</span></h5> 
												<h5>$<?php echo $value['monthlyprice'];?><span class="month">per month</span></h5> 
												<h6><?php echo $value['free'];?>Domain</h6>
												
												<ul>
													<li><strong><?php echo $value['space'];?></strong> Disk Space</li>
													<li><strong><?php echo $value['band'];?></strong> Data Transfer</li>
													<li><strong><?php echo $value['mailbox'];?></strong> Disk Space</li>
													<li><strong><?php echo $value['language'];?></strong> Data Transfer</li>
													<li><strong><?php echo $value['sku'];?></strong> SKU</li>
													<li><strong>Includes </strong>  Global CDN</li>
													<li><strong>High Performance</strong>  Servers</li>
													<li><strong>location</strong> : <img src="images/india.png"></li>
													</ul>
													<div class="linux-top">
												<a type="button" data-toggle="modal" data-target="#myModal" data-id="<?php echo $value['ids'];?>"
												data-name="<?php echo $value['name'];?>"
												data-mp="<?php echo $value['monthlyprice'];?>"
												data-ap="<?php echo $value['annualprice'];?>"
												data-sku="<?php echo $value['sku'];?>"
												 class="pro" >Add to cart</a>
												</div>
													</div>
													<?php endif;?>
													<?php endforeach;?>
												</div>
												
												</div>
										
											<div class="clearfix"></div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="get"> 
		
			</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <h5 id="name"></h5>
        <!-- Modal body -->
        <div class="modal-body">
						<ul style="list-style-type:none">
						<li><h5>Monthly Pack  <span id="mp"></span></h5></li>
						<li><h5>Annual Pack  <span id="ap"></span></h5></li>
						</ul>
						<select class="form-control" id="select">
						<option value="select">please select pack</option>
						<option value="Monthly Pack">Monthly Pack <span id="mp"></span></option>
						<option value="Annualy Pack">Annualy Pack<span id="ap"></span></option>
						</select>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" id="pack">choose</button>
        </div>
        
      </div>
    </div>
  </div>
					<!-- clients -->
				<div class="clients">
					<div class="container">
						<h3>Some of our satisfied clients include...</h3>
						<ul>
							<li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
							<li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
							<li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
							<li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
							<li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
							<li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
						</ul>
					</div>
				</div>
       <!-- clients -->
					<div class="whatdo">
						<div class="container">
							<h3>Linux Features</h3>
							<div class="what-grids">
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="what-grids">
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-move" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 what-grid">
									<div class="what-left">
									<i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
									</div>
									<div class="what-right">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

				</div>
			<!---footer--->
			<?php include "footer.php";?>
			<!---footer--->
			
			
</body>
</html>
