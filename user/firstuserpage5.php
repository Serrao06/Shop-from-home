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

$uid = $_SESSION['u_id'];


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


<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>




<style type="text/css">
	

@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

body {
    background-color: #eeeeee;
    font-family: 'Open Sans', serif
}

.containe {
    margin-top: 50px;
    margin-bottom: 50px
}

.card {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0.10rem
}

.card-header:first-child {
    border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
}

.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: #fff;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1)
}

.track {
    position: relative;
    background-color: #ddd;
    height: 7px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 60px;
    margin-top: 50px
}

.track .step {
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: 25%;
    margin-top: -18px;
    text-align: center;
    position: relative
}

.track .step.active:before {
    background: #FF5722
}

.track .step::before {
    height: 7px;
    position: absolute;
    content: "";
    width: 100%;
    left: 0;
    top: 18px
}

.track .step.active .icon {
    background: #ee5435;
    color: #fff
}

.track .icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    position: relative;
    border-radius: 100%;
    background: #ddd
}

.track .step.active .text {
    font-weight: 400;
    color: #000
}

.track .text {
    display: block;
    margin-top: 7px
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.itemside .aside {
    position: relative;
    -ms-flex-negative: 0;
    flex-shrink: 0
}

.img-sm {
    width: 80px;
    height: 80px;
    padding: 7px
}

ul.row,
ul.row-sm {
    list-style: none;
    padding: 0
}

.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.itemside .title {
    display: block;
    margin-bottom: 5px;
    color: #212529
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

.btn-warning {
    color: #ffffff;
    background-color: #ee5435;
    border-color: #ee5435;
    border-radius: 1px
}

.btn-warning:hover {
    color: #ffffff;
    background-color: #ff2b00;
    border-color: #ff2b00;
    border-radius: 1px
}
</style>




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
				<li class="active">Order details/Tracking</li>
			</ol>
		</div>
	</div>



<!-- //breadcrumbs -->



<div class="containe">
    <article class="card">
        


         
        <div class="card-body">
        	        <?php
            $stmt = $admin->ret("SELECT * FROM `addorderdetail` WHERE `u_id` = '$uid'");
            while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
            $a = $row['or_id'];
            $b = $row['ddate'];
            $c = $row['shipcom'];
            $d = $row['status'];
            $e = $row['address'];
            $f = $row['state'];
            $g = $row['pin'];
          

            $h = $row['paymode'];
            $i = $row['tamount'];
           

          

           
           ?>
             
            <h6>Transation Id:<?php echo $a ?></h6>
            <article class="card" style="padding: 10px 30px">
                <div class="card-body row">
                    <div class="col"> <strong>Estimated Delivery time:</strong> <br><?php echo $b ?></div>
                    <div class="col"> <strong>Shipping BY:</strong> <br> <?php echo $c ?>, | <i class="fa fa-phone"></i></div>
                   
                    <div class="col"> <strong>Delivery address #:</strong> <br><?php echo $e ?>,<?php echo $f ?>,<?php echo $g ?> </div>

                     <div class="col"> <strong>Payment details</strong> <br> <?php echo $h ?>,Rs <?php echo $i ?> </div>
                </div>
            </article>

             

<?php if($d == 'Order confirmed') {?>
            <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                                <!-- <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Ready for pickup</span> </div> -->
            </div>
            <?php } else if($d == 'On the way'){?>

                <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text">On the way </span> </div>
 
                <!-- <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Ready for pickup</span> </div> -->
            </div>

            <?php } else if($d == 'Delivered'){?>
                <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text">On the way </span> </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text">Delivered</span> </div>
                <!-- <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Ready for pickup</span> </div> -->
            </div>
            <?php } else { ?>

                <div></div>
                <?php } ?>




<?php } ?>

            <hr>

           
<?php
             $astm = $admin -> ret("SELECT * FROM `orderedproduct` WHERE `u_id` = '$uid'");
            while($rows = $astm -> fetch(PDO::FETCH_ASSOC)){

            ?>

            <ul class="row">
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="upload/<?php echo $rows['image']; ?>" height="100px" width="100px" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title"><?php echo $rows['title']; ?><br></p> <span class="text-muted">Transaction Id:<?php 
                            if(isset($a)==false){
                                $a='';
                            }
                            echo $a ?></span>
                        </figcaption>
                    </figure>
                </li>
                
            </ul>

        <?php } ?>

            <hr> <a href="firstuserpage.php" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
        </div>



  


    </article>
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