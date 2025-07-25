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
<!--- googlefonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
	
<body>


<?php include "header.php" ?>
	<!-- main-slider -->
		<ul id="demo1">
			<li>
				<img src="images/11.jpg" alt="" />
				<!--Slider Description example-->
				<div class="slide-desc">
					<h3>you Can buy products nearby you</h3>
				</div>
			</li>
			<li>
				<img src="images/22.jpg" alt="" />
				  <div class="slide-desc">
					<h3>Products will be deliverd within a day</h3>
				</div>
			</li>
			
			<li>
				<img src="images/44.jpg" alt="" />
				<div class="slide-desc">
					<h3>Feel free to explore this webiste.</h3>
				</div>
			</li>
		</ul>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!--- here is some titles -->
	<div class="newie">
		
	</div>
 <!-- Carousel
    ================================================== -->
<!--brands-->
	<div class="brands">
		<div class="container">
		<h3>All New Products Avaiable in Store</h3>
				
				
		</div>
	</div>	
<!--//brands-->
<!-- new -->
	<div class="newproducts-w3agile">
		<div class="container">
				<div class="agile_top_brands_grids">





  <?php 
                   
                $stmte = $admin -> ret("SELECT * FROM `addsellerproduct` ORDER BY `p_id` DESC LIMIT 24");
                    while($rowx = $stmte-> fetch(PDO::FETCH_ASSOC)){ 

                        $image = $rowx['image'];
                        $image = substr($image,3);
                
                
                ?>


					<div class="col-md-3 top_brand_left-1">
						<div class="hover14 column" Style="margin-top:20px;">
							<div class="agile_top_brand_left_grid">
								<?php
								if($rowx['discount']>0)
								{
								echo "<div class=agile_top_brand_left_grid_pos>
									<img src=images/offer.png alt=  class=img-responsive>
								</div>";
								}
								?>
								<div class="agile_top_brand_left_grid1">
									<figure>
										<div class="snipcart-item block">
											<div class="snipcart-thumb">
												<a href="firstuserpage.php"><img title=" " alt=" " src="upload/<?php echo $rowx['image']; ?>" height="150" width="150"></a>		
												<p Style="font-family: 'Poppins', sans-serif; font-weight:700"><?php echo $rowx['name']; ?></p>
												<div class="stars">
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star blue-star" aria-hidden="true"></i>
													<i class="fa fa-star gray-star" aria-hidden="true"></i>
												</div>
													<h4 Style="font-family: 'Poppins', sans-serif;">Rs.<?php echo $rowx['price']; ?>
													<?php 
													if($rowx['discount']>0)
														{
														echo"<span Style=font-size:13px>Rs."; echo $rowx['discount']; echo"</span>";
														}
														?> </h4>
											</div>
											<div class="snipcart-details top_brand_home_details">
												

												<a href="firstuserpage2.php?vid=<?php echo $rowx['p_id']; ?>" class="btn btn-primary" Style="border-radius:15px">Add to Cart</a>
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
	</div>
<!-- //new -->
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