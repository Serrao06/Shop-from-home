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


if(!isset($_SESSION["u_id"])) {
    header("location:userlogin.php");
}

$ic=$_GET['ic'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Groceries :: w3layouts</title>
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
	
<!-- //header -->
<!-- navigation -->
	<?php include "header.php" ?>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="firstuserpage.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Shop using location</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- groceries --->
	<div class="products">
		<div class="container">
			<div class="col-md-4 products-left">
				<div class="categories">
					<h2>Location</h2>
					<ul class="cate">
						<li><a href="firstuserpage.php" style="color: black !important"><i class="fa fa-arrow-right" aria-hidden="true"></i>view all products</a></li>
							<ul>




																						   <?php

       $stcn = $admin -> ret("SELECT * FROM `addloc`");

      while ($ron= $stcn -> fetch(PDO::FETCH_ASSOC)) {

      ?>
													
								<li ><a href="firstuserpage10.php?ic=<?php echo $ron['name']; ?>" style="color: black !important"><i class="fa fa-arrow-right" aria-hidden="true"></i><?php echo $ron['name']; ?></a></li>
								 
									<?php } ?>
							</ul>
						
					</ul>
				</div>																																												
			</div>
			<div class="col-md-8 products-right">
		


				<div class="agile_top_brands_grids">

					 <?php
                 $stmts = $admin -> ret("SELECT * FROM `addsellerproduct` WHERE `l_name`='$ic'");
                    while($rows = $stmts-> fetch(PDO::FETCH_ASSOC)){ 
            
                        $image = $rows['image'];
                        $image = substr($image,3);

                        ?>
					<div class="col-md-4 top_brand_left">
						<div class="hover14 column">
							<div class="agile_top_brand_left_grid">
								<div class="agile_top_brand_left_grid_pos">
									<img src="images/offer.png" alt=" " class="img-responsive">
								</div>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="firstuserpage.php"><img title=" " alt=" " src="upload/<?php echo $rows['image']; ?>" height="150" width="150"></a>		
												<p><?php echo $rows['name']; ?></p>
												<h4>Rs.<?php echo $rows['price']; ?><span>Rs.<?php echo $rows['discount']; ?></span></h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
											
                                              <a href="firstuserpage2.php?vid=<?php echo $rows['p_id']; ?>" class="btn btn-primary">Add to Cart</a>

											</div>
										</div>
									</figure>
								</div>
							</div>
						</div>
					</div>

				<?php } ?>


						<div class="clearfix"> </div>


				</div>




			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--- groceries --->
<!-- //footer -->

	<?php include "footer.php" ?>
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