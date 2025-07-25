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
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content" style="opacity: 0.9">
                    <form action="usercontroller/userlogreg.php" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                        <h2 class="form-title">User Registration account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Full Name" pattern="[a-zA-Z'-'\s]*" required/>
                        </div>

                         <div class="form-group">
                            <input type="tel" class="form-input" name="a" id="name" placeholder="Your phone number" pattern="[0-9]{10}" required/>
                        </div>

        
              

                        


                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password (Atleaset 8 Digits)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                       

                        <div class="form-group">
                            <input type="submit" name="register" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="userlogin.php" class="loginhere-link">Login here</a>
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