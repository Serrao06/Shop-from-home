<?php


define('DIR','../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="images/weblogo-01.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="loginpage/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="loginpage/css/style.css">

    <style type="text/css">
        
        .dropdown{

  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  /*border: 1px solid #ccc;*/
  border-radius: 4px;
  box-sizing: border-box;


    font-size: 0.9em;
  color: green;
  font-weight: 100;
  /*width: 94.5%;*/
  /*display: block;*/
  /*border: none;*/
  /*padding: 0.8em;*/
  border: solid 1px rgba(255, 255, 255, 0.37);
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  color: black;
    font-family: 'Roboto', sans-serif;
  



}
    </style>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content" style="opacity: 0.9">
                    <form action="usercontroller/sellerlogreg.php" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                        <h2 class="form-title">Seller Registration account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Full Name" pattern="[a-zA-Z'-'\s]*" required/>
                        </div>

                        

        
                        



                        <div class="form-group">
                            <input type="text" class="form-input" name="a" id="name" placeholder="Your phone number" pattern="[0-9]{10}" required/>
                        </div>
                        


                        

                           <div class="form-group">
                            <h3>Upload your photo:</h3>
                            <input type="file" class="form-input" name="image" id="name" placeholder="enter photo" required/>
                        </div>

                          <div class="form-group">
                            <h3>Upload your document:</h3>
                            <input type="file" class="form-input" name="pdf" id="name" placeholder="enter photo" required/>
                        </div>


                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                        </div>
                        <!----location----------------------------->
                        <div class="form-group">
                        <h3>Select Location:</h3>
                             <select name="loc" class="form-input">
                                    <option>Choose seller location</option>
                                                 

                                 <?php

                               $stmts = $admin -> ret("SELECT * FROM `addloc`");

                               while ($rows= $stmts -> fetch(PDO::FETCH_ASSOC)) {

                 ?><option value="<?php echo $rows['name'] ; ?>" ><?php echo $rows['name']; ?></option>


                                <?php } ?>

                                  </select>

								  <br>
                               </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password (Atleaset 8 Digits)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                       

                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="register" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="sellerlogin.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="loginpage/vendor/jquery/jquery.min.js"></script>
    <script src="loginpage/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>