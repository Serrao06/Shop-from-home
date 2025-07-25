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

$idd=$_SESSION['cs_id'];

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
				<p>Sell online keep Discount UP TO 20-40% OFF<a href="firstsellerpage.php">SELL NOW</a></p>
			</div>
			<div class="agile-login">
				<ul>
		            <li></li>
		             <li></li>
					
				
					
				</ul>
			</div>
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

	<!-- main-slider -->





     <?php
            $stmt = $admin->ret("SELECT * FROM `sendpayment` WHERE `cs_id` = '$idd'");
            while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 


                  
                ?>


<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <address>
                        <strong><?php echo $row['address'];?></strong>
                     
                        <abbr title="Phone">P:</abbr> (213) 484-6829
                    </address>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                    <p>
                        <em>Date: <?php echo $row['date'];?></em>
                    </p>
                    <p>
                        <em>Receipt #: <?php echo $row['tid'];?></em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sold products</th>
                            <th>order id</th>
                            
                            <th class="text-center">cart price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td class="col-md-9"><em><?php echo $row['title'];?></em></h4></td>
                            <td class="col-md-1" style="text-align: center"><?php echo $row['or_id'];?>  </td>
                  
                            <td class="col-md-1 text-center">Rs.<?php echo $row['price'];?></td>
                        </tr>
                       
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            
                            <p>
                                <strong>admin Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>Rs.20-30</strong>
                            </p>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>Rs.<?php echo $row['amount'];?></strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block">
                    Paid   <span class="glyphicon glyphicon-chevron-right"></span>
                </button></td>
            </div>
        </div>
    </div>

<?php } ?>













		
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	
<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
   <!-- /.carousel -->	
<!--banner-bottom-->
				
<!--banner-bottom-->
<!--brands-->
		
<!--//brands-->
<!-- new -->
	
<!-- //new -->
<!-- //footer -->
<!-- <div class="footer">
	
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2022 Aloysious Shop From Home. All rights reserved | Design by <a href="http://w3layouts.com/">Shop From Home Team</a></p>
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
		</div> -->
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