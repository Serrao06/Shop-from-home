 <?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();



$a = $_GET['n'];
$b = $_GET['ph'];

$e = $_GET['e'];
$f = $_GET['pa'];
$g = $_GET['im'];
$h = $_GET['pd'];






     $stm=$admin -> cud("INSERT INTO `cancelseller` (`name`,`phone`,`email`,`password`,`image`,`pdf`) VALUES ('".$a."','".$b."','".$e."','".$f."','".$g."','".$h."')","saved");
	 echo "<script>alert('you haved given approval')</script>";
	 $admin -> redirect('../viewseller');





?>