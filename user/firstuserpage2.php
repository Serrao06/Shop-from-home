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

$vid=$_GET['vid'];
$uid = $_SESSION['u_id'];

$stmts = $admin -> ret("SELECT * FROM `addsellerproduct` WHERE `p_id` = '$vid'");
$rows = $stmts -> fetch(PDO::FETCH_ASSOC);

$disc = $rows['discount'];
$desc = $rows['description'];

$name = $rows['name'];
$mdat = $rows['mdat'];
$edat = $rows['edat'];
$actualprice = $rows['price']; 
$image = $rows['image'];
// $image = substr($image,3);
$csid = $rows['cs_id'];



$totalprice = $actualprice - $disc ;
?>
<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single Page :: w3layouts</title>
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
				<li class="active">Product details</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	<div class="products">
		<div class="container">
			<div class="agileinfo_single">
				
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="upload/<?php echo $rows['image']; ?>" height="500" width="500" alt=" " class="img-responsive">
				</div>
				<div class="col-md-8 agileinfo_single_right">
				<h2><?php echo $name;?></h2>
				<div class="w3agile_description">
				
						<p Style="font-family: 'Poppins', sans-serif"><?php echo $desc;?></p>
					</div>

                 <h4 class="w3agile_description" style="color:orange; font-family: 'Poppins', sans-serif; font-size:15px">MFG:<?php echo $mdat;?><br><br><span>EXP:<?php echo $edat;?></span></h4>
					
					
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing" Style="font-family: 'Poppins', sans-serif">Rs.<?php echo $totalprice;?>
							<span Style="font-family: 'Poppins', sans-serif; font-size:15px;">
							<?php
							if($disc>0)
							{
								echo"Dis:";  echo $disc; echo"Rs";
							}
							?>
							</span>
							</h4>
						</div>
                       


                       




						<div class="snipcart-details agileinfo_single_right_details">
							<form action="usercontroller/addtocart.php" method="post">
								<fieldset>
								 <div class="quantity">
                                          <label Style="font-family: 'Poppins', sans-serif;">Quantity:</label>    <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1" Style="width:50px; font-family: 'Poppins', sans-serif; margin-right:35px">
                                    </div>
									   <input type="hidden" name="vid" value="<?php echo $vid;?>">

                   <input type="hidden" name="u_id" value="<?php echo $uid;?>">  

                   <input type="hidden" name="cs_id" value="<?php echo $csid;?>">  

                   <input type="hidden" name="name" value="<?php echo $name;?>"> 

                   <input type="hidden" name="i" value="<?php echo $image;?>">  
									<br>
									<input type="submit" name="add" value="Add to cart" class="button" Style="border-radius:15px;">
								</fieldset>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- new -->
	
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