<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(!isset($_SESSION["cs_id"])) {
       header("location:index.php");
}


$cs_id=$_SESSION['cs_id'];


$stmts1 = $admin -> ret("SELECT * FROM `seller` where `s_id`='$cs_id'");

$rows1= $stmts1 -> fetch(PDO::FETCH_ASSOC);

$lname= $rows1['l_name'];

?>


<!DOCTYPE html>
<html>
<head>
<title>Shop From Home</title>
<link rel="shortcut icon" href="images/weblogo-01.png">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>


	<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>Sell online and grab more customers&nbsp;<a href="firstsellerpage.php">SELL NOW</a></p>
			</div>
			<!--<div class="agile-login">
				<ul>
		            <li></li>
		             <li></li>
					
				
					
				</ul>
			</div>-->
			<div class="product_list_header">  
					<form action="firstsellerpage1.php" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<!-- <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button> -->
					</form>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Sell online or call us : +91 7022957881</li>
					
				</ul>
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="firstsellerpage.php">Shop From Home</a></h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
				
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
									<li class="active"><a href="firstsellerpage.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Added Products<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Products</h6>
														<li><a href="firstsellerpage1.php">View Products</a></li>
																											</ul>
												</div>	
												
											</div>
										</ul>
									</li>
	
									<li class="active"><a href="svieworderdetails.php" class="act">View Order Details</a></li>

									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Payment<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>Admin pay</h6>
														<li><a href="firstsellerpage2.php">View Payment invoice</a></li>
														
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>
									
								
									<li><a href="sellerlogout.php">Seller Logout</a></li>
									
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->

<div class="col-lg-10" style="color:#15b1a2;">
	<br><br>
  <form action="usercontroller/firstsellerpage.php" method="post" enctype="multipart/form-data">
    <label for="book name">Product name:</label>
    
 
   
                                    <input type="text" class="form-control" placeholder="Enter product name" name="name">
                                    <br>


                                       <input type="hidden" class="form-control"  name="cs_id" value="<?php echo $cs_id ?>" >
                                       <input type="hidden" class="form-control"  name="lname" value="<?php echo $lname ?>" >


<label for="book name">Select Product Category:</label>
                             <select name="title" class="form-control">
                                    <option>Choose product Category</option>
                                                 

                                 <?php

                               $stmts = $admin -> ret("SELECT * FROM `addcat`");

                               while ($rows= $stmts -> fetch(PDO::FETCH_ASSOC)) {

                 ?><option value="<?php echo $rows['cname'] ; ?>" ><?php echo $rows['cname']; ?></option>


                                <?php } ?>

                                  </select>
                                    <br>

									
									


                                    


                                    <label for="book name">Product Image:</label>
                                    <input type="file" class="form-control" placeholder="Enter image" name="image">
                                    <br>
                                    

                                    <label for="book name">Manufacture Date:</label>
                                    <input type="date" class="form-control" placeholder="Enter manufacture date" name="aname">
                                    <br>
                                    

                                    <label for="book name">Expired Date:</label>
                                    <input type="date" class="form-control" placeholder="Enter expired date" name="pname">
                                    <br> 
                                    
                                    <label for="book name">Product Price:</label>
                                    <input type="text" class="form-control" placeholder="Enter product price" name="price">
                                    <br> 
                                    
                                    <label for="book name">Product Discount:</label>
                                    <input type="text" class="form-control" placeholder="Enter product discount" name="discount">
                                    <br> 
                                    
                                    <label for="book name">Product Quantity:</label>
                                    <input type="text" class="form-control" placeholder="Enter product quantity" name="quantity">
                                    <br> 


                                    <label for="book name">Product Description:</label>
                                    <textarea class="form-control" placeholder="Enter product description" rows="4" name="text"></textarea>
                                    <br>
  
    <input type="submit" value="Add" name="add">
  </form>
</div>

	
<!-- //new -->
<!-- //footer -->
<div class="footer">
	
		
		<div class="footer-copy">
			
			<div class="container">
				
				<p Style="width:700px">© 2022 Aloysious Shop From Home. All rights reserved | Design by <a href="http://w3layouts.com/">Shop From Home Team</a></p>
			</div>
		</div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="payment-w3ls">	
					<img src="images/card.png" alt=" " class="img-responsive">
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>