<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact Us</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><a href ="https://www.google.co.in/maps/place/Jodurasthe+Park,+Karkala,+Karnataka/@13.2366259,74.9874006,17.14z/data=!4m5!3m4!1s0x3bbb57db1036794d:0xf50af8b6da294ae6!8m2!3d13.2361394!4d74.986849?hl=en&authuser=0">Karkala</li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:serraonevil@gmail.com">serraonevil@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><a href="tel:7022957881">+91 702295781</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="firstuserpage.php">About Us</a></li>

						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="contact.php">Feedback</a></li>
						
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 

																		   <?php

       $stcc = $admin -> ret("SELECT * FROM `addcat`");

      while ($rocc= $stcc -> fetch(PDO::FETCH_ASSOC)) {

      ?>

   
    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="firstuserpage1.php?ic=<?php echo $rocc['cname']; ?>"><?php echo $rocc['cname']; ?></a></li>

														<?php } ?>
						
						
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>My order</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="firstuserpage5.php">order details</a></li>
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				<p>© 2022 Shop From Home. All rights reserved | Design by <a href="http://shopfromhome.com/">Shop From Home team</a></p>
			</div>
		</div>
		
	</div>	
	<div class="footer-botm">
			<div class="container">
				<div class="w3layouts-foot">
					<ul>
						<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="w3_agile_youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>