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
       header("location:index.php");
}

$rate=$_GET['rate'];


$stmts = $admin -> ret("SELECT * FROM `addsellerproduct` WHERE `p_id` = '$rate'");
$rows = $stmts -> fetch(PDO::FETCH_ASSOC);



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
	



    <div class="about">
        <div class="w3_agileits_contact_grids">
         
            <div class="col-md-6 w3_agileits_contact_grid_right">
                <h2 class="w3_agile_header">Leave us<span> Rating:</span></h2>

                <form action="usercontroller/feedback.php" method="post">


           

                    <span class="input input--ichiro">
                        <input class="input__field input__field--ichiro" type="text" id="input-25" name="a" placeholder=" " required="" />
                        <label class="input__label input__label--ichiro" for="input-25">
                            <span class="input__label-content input__label-content--ichiro">Your Name</span>
                        </label>
                    </span>
                   


                    <textarea name="b" placeholder="Your message here..." required=""></textarea>


                        <input type="hidden" name="c" value="<?php echo $rows['p_id']; ?>">


                    <input type="submit" value="Submit" name="add">
                </form>
            </div>
            <div class="clearfix"> </div>
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