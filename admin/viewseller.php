<?php
define('DIR', '../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();

if(!isset($_SESSION["a_id"])) {
       header("location:adminlogin.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="img/weblogo-01.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Shop From Home</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">

    <!--header end-->


    <?php include "header.php" ?>
    
    <!--header end-->
 
    
    <?php include "sidebar.php" ?>




    <!--sidebar start-->



    
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->

        <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading"  style="background-color: #15b1a2;color:white">
                View all Seller Ac Approval
              </header>
              <table class="table table-hover">
                <thead>
                  <tr>
                        <th>Image</th>
                        
                        <th>Name</th>
                        <th>Phone_no</th>
                    
                        <!-- <th>Document</th> -->
                        <th>Email</th>
                        <th style="display:none">Password</th>
                         <th></th>
                        <th>Epproval</th>

                        <th>Notification</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php


                                   $stmtss=$admin -> ret("SELECT * FROM `seller`");

                                   while($rowss=$stmtss->fetch(PDO::FETCH_ASSOC))
   
                                   {
                                         ?>
                      <tr>
                          <td><img src="upload/<?php echo $ii = $rowss['image']; ?>" height="50" width="50" class="simple"></td>
        
                          <td><?php echo $bb = $rowss['name']; ?></td>
                          <td><?php echo $cc = $rowss['phone']; ?></td>
                         
  <!-- <td><a href="upload/<?php echo $pp = $rowss['pdf']; ?>" download>Download</a></td> -->
                           <td><?php echo $ff = $rowss['email']; ?></td>
                          <td style="display:none"><?php echo $gg = $rowss['password']; ?></td>




                          <td>   
       <?php
            // $d=$_SESSION['email'];
   $st=$admin -> ret("SELECT * FROM `cancelseller` WHERE `name`='$bb' AND `phone`='$cc' AND `email`='$ff' AND  `password`='$gg' AND `image`='$ii' AND  `pdf`='$pp'");

          
            $numm = $st->rowCount();
            if($numm>0){

              ?>
              
         <td>
            <div class="btn btn-success"><b><i>Approved</i></b></div>
         </td>

         <td>
              <form action="mail/notify.php" method="POST">
                <input type="hidden" name="m" value="your account is approved, now you can use your current email and password!!!">
                <input type="hidden" name="e" value="<?php echo $rowss['email']; ?>">
                <input type="hidden" name="n" value="<?php echo $rowss['name']; ?>">
          


      <button type="submit" name="add" class="btn btn-primary">
      notification
    </button>
    </form>
            </td> 



                  <?php

        }else{
?>
          <td>
            <a href="admincontroller/viewseller.php?n=<?= $rowss['name'];?> & ph=<?= $rowss['phone'];?> & e=<?= $rowss['email'] ;?> & pa=<?= $rowss['password'] ;?> & im=<?= $rowss['image'] ;?> & pd=<?= $rowss['pdf'] ;?>" class="btn btn-primary" onclick="return confirm('Are you sure want to Approve?')"><b><i>approve</i></b></a> </td> 

            <td>
              <form action="mail/notify.php" method="POST">
                <input type="hidden" name="m" value="your account is approved, now you can use your current email and password!!!">
                <input type="hidden" name="e" value="<?php echo $rowss['email']; ?>">
                <input type="hidden" name="n" value="<?php echo $rowss['name']; ?>">
           
       


      <button type="submit" name="add" class="btn btn-primary">
      notification
    </button>
    </form>
            </td>
        
            
        <?php    }
         ?>
     </td>
                          
                      </tr>

                    <?php } ?>
                      
                    </tbody>
                  </table>
                   
            </section>
          </div>






       
        <!--/.row-->


        
      <div class="text-right">
       

 <?php include "footer.php" ?>




      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
