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
$iddd=$_SESSION['u_id'];

?>
<!DOCTYPE html>
<html>
<head>
<title>Super Market an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Checkout :: w3layouts</title>
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


  <script language="javascript" type="text/javascript">
function changeRate(id,pos) {

var qu = document.getElementsByName("quantity")[pos].value;
window.location.href="usercontroller/updatecart.php?id="+id+"&q="+qu;

}

function contShop() {

window.location.href="firstuserpage.php";
checkOut
}

function checkOut(uid,totammount) {
	

window.location.href="firstuserpage4.php?id="+uid+"&ta="+totammount;

}

// function dlt(id) {
  

// window.location.href="Controller/dltcart.php?id="+id;

// }

</script>











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
<?php include "header.php" ?>
	
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1">
				<li><a href="firstuserpage.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout </li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	<div class="checkout">
		<div class="container">
			<h2 Style="font-weight:800; font-size:20px">Your shopping cart : <span>Products</span></h2>
			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th></th>	
							<th>Product</th>
							<th>Quantity</th>
							
						
							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>

					 <?php 
                       
           $stmt = $admin -> ret("SELECT * FROM `cart` WHERE `u_id` = '$uid'");
           $xstmt = $admin -> ret("SELECT COUNT(*) FROM `cart` WHERE `u_id` = '$uid'");
           $xrow = $xstmt -> fetch(PDO::FETCH_ASSOC);
           
                         $a= implode($xrow);
                        
                        $b = 0;
                        $i = 0;

           while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
                
                $cid = $row['c_id'];    
                       
               $vid = $row['pd_id'];

                $astmt = $admin-> ret("SELECT * FROM `addsellerproduct` WHERE `p_id` = '$vid'");
                $arow = $astmt -> fetch(PDO::FETCH_ASSOC);

                $qun = $row['quantity'];

                 $discount = $arow['discount'];


                 $pri = $arow['price'];

                 $prii = $pri - $discount;

                $totqp = $qun * $prii;
               
              $image = $arow['image'];
              $image = substr($image,3);
             

              $b = $totqp + $b;
              $total = $b + 20;




                            

                        ?>
					<tr class="rem1">
						
						<td class="invert"><a href=""><img src="upload/<?php echo $arow['image']; ?>" height="100" width="100" alt=" " /></a></td>
						<td class="invert" Style="font-weight:600; font-size:15px;"><?php echo $arow['name']; ?></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity buttons_added">
                                                      <input size="1"  type="number" name="quantity" class="form-control text-center"  id="<?php echo $row['c_id']; ?>" onChange="changeRate(<?php echo $cid;?>,<?php echo $i; ?>)" min="1" max="100" value="<?php echo $row['quantity']; ?>" Style="font-weight:600; font-size:15px;">
                                                  
                                                </div>
							</div>
						</td>
						
						
						<td class="invert" Style="font-weight:600; font-size:15px;">₹ <?php echo $totqp.".00"; ?></td>
						<td class="invert">
							 <a title="Remove this item" class="remove" href="usercontroller/deletecart.php?id=<?= $row['pd_id']; ?>" Style="font-weight:1000">X</a> 
						</td>
					</tr>
				<?php 
				  ++$i;
			} ?>
					
				
								<!--quantity
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script> -->
								<!--quantity-->
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket">
					<h4 >Continue to basket</h4>
					<ul>
						<?php
					if(isset($total)==false){
						$total=0;
					}
					?>
						<li  Style="color:black; font-weight:600">Cart Subtotal<i>-</i> <span>₹ <?php echo $b.".00";?></span></li>
						
						<li Style="color:black; font-weight:600">Shipping And Handling<i>-</i> <span>₹ 20</span></li>
						<li Style="color:black; font-weight:1000">Order Total <i>-</i> <span>₹ <?php echo $total.".00"; ?></span></li>
					</ul>
					  <?php 
                            $_SESSION['ammount'] = $total;
                            
                            
                            ?> 
				</div>
				<div class="checkout-right-basket">
					 <button onClick="contShop()" type="button" class="btn btn-block btn-light">Continue Shopping</button>
					<button onClick="checkOut(<?php echo $uid ; ?>,<?php echo $total ;?>)" class="btn btn-lg btn-block btn-danger text-uppercase">Checkout</button>
				</div>


				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<?php include "footer.php" ?>
	<!-- //footer -->
<!-- //checkout -->
	
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