<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>SALE UP TO 40% OFF. ON Few Products . <a href="firstuserpage.php">GRAB NOW</a></p>
			</div>
			<div class="agile-login">
				<ul>
					<li></li>
					<li></li>
					<li><a href="userlogout.php" Style="color:orange">logout</a></li>
					
					
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
				
					
				<img src="images/weblogo-01-01.png" Style="width:200px; height:70px;" alt="Logo" class="phone_email"/>
				
			</div>
			<div class="w3ls_logo_products_left" Style="margin-top:20px;">
				<h1><a href="firstuserpage.php">Shop From Home</a></h1>
			</div>
		<div class="w3l_search" Style="margin-top:20px;">
			
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
									<li class="active"><a href="firstuserpage.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Products Catgory</h6>
														   <?php

       $stcc = $admin -> ret("SELECT * FROM `addcat`");

      while ($rocc= $stcc -> fetch(PDO::FETCH_ASSOC)) {

      ?>
														<li><a href="firstuserpage1.php?ic=<?php echo $rocc['cname']; ?>"><?php echo $rocc['cname']; ?></a></li>
														<?php } ?>
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>


									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Location<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Products by location</h6>
														   <?php

       $stcc1 = $admin -> ret("SELECT * FROM `addloc`");

      while ($rocc1= $stcc1 -> fetch(PDO::FETCH_ASSOC)) {

      ?>
														<li><a href="firstuserpage10.php?ic=<?php echo $rocc1['name']; ?>"><?php echo $rocc1['name']; ?></a></li>
														<?php } ?>
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>





									<li class="dropdown">
										<a href="firstuserpage3.php">Cart</a>
										
									</li>
									<!-- <li class="dropdown">
										<a href="firstuserpage4.php">Checkout</a>
									
									</li> -->
									<li class="dropdown">
										<a href="firstuserpage5.php" class="dropdown-toggle" data-toggle="dropdown">Order<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>order details</h6>
														<li><a href="firstuserpage5.php">view order status</a></li>
														
													</ul>
												</div>
												
											
											</div>
										</ul>
									</li>

								
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->