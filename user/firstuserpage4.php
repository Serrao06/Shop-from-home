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

$u = $_SESSION['ammount'];
$iddd=$_SESSION['u_id'];


$stmt = $admin -> ret("SELECT COUNT(*) FROM `cart` WHERE `u_id` = '$uid' ");
$row = $stmt -> fetch(PDO::FETCH_ASSOC);
$cartItems = implode($row);


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







   </style>

   <style type="text/css">





.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;

}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}



input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=tel] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=password] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=email] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}

.containe {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}
    </style>

 



<!-- 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 -->

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
				<li class="active">Billing</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
	
<!-- new -->


<br>




<div class="row">
  <div class="col-75">
    <div class="containe">
      <form action="usercontroller/order.php" method="POST">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Enter your full name" required>


            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your Email" required>

              <label for="email"><i class="fa-cc-discover"></i>Phone number</label>
            <input type="text" id="email" name="phone" placeholder="Enter your phone no" pattern="[0-9]{10}" required>


            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Enter your address" required>

            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Enter your City name" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Enter your State name" required>
              </div>
              <div class="col-50">
                <label for="zip">Pincode</label>
                <input type="text" id="zip" name="pincode" placeholder="Enter current pincode" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
             <span>
               


            
 
   
          </div>

            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="name" required>
            <label for="ccnum">Credit card number</label>
            <input type="tel" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" pattern="[0-9\s]{13,19}" required>
            <label for="expmonth">Exp Month</label>
            <input type="tel" id="expmonth" name="month" placeholder="mm/" pattern="[0-9]{2}" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="tel" id="expyear" name="year" placeholder="yy/" pattern="[0-9]{2,4}" required>
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="password" id="cvv" name="cvv" placeholder="****" pattern=".{3}" required>
              </div>
            </div>
          </div>
          
        </div>
        
        <input type="submit" value="Continue to checkout" name="submit" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="containe">
      <h2>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $cartItems ; ?></b></span></h2>
               <?php
          $stmt = $admin->ret("SELECT * FROM `cart` WHERE `u_id` = '$uid'");
          while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
            $vid = $row['pd_id'];
            $astmt = $admin -> ret("SELECT * FROM `addsellerproduct` WHERE `p_id` = '$vid' ");
            $arow = $astmt -> fetch(PDO::FETCH_ASSOC);
            $pr = $arow['price'];
           
             
          ?>

      <p><a href="#"></a><?php echo $arow['name']; ?><span class="price">Rs <?php echo $arow['price']; ?></span></p>

  <?php } ?>
     
      <hr>
      <p>Total Amount <span class="price" style="color:black"><b>Rs<?php echo $_SESSION['ammount']; ?></b></span></p>
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