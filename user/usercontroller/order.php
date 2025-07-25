<?php

define('DIR','../../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();



$uid = $_SESSION['u_id'];

$a  = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['phone'];
$d = $_POST['city'];
$e = $_POST['state'];
$f = $_POST['address'];
$g = $_POST['pincode'];
$h  = $_POST['co'];
$i  = $_POST['cardname'];
$j  = $_POST['cardnumber'];
$k  = $_POST['month'];
$l  = $_POST['year'];
$m  = $_POST['cvv'];
$n  = $_SESSION['ammount'];



 $stmt = $admin -> cud("INSERT INTO `ordercheckout` (`u_id`,`name`, `email`,`phone`,`city`,`state`,`address`,`pin`,`paymode`,`cardname`,`cardno`,`expm`,`expy`,`cvv`,`tamount`) VALUES ('".$uid."','".$a."','".$b."','".$c."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$j."','".$k."','".$l."','".$m."','".$n."')","saved");


 //take id


 // crate pending oreder table 

 // by using user id fetch cart items 

 // create a loop and store the product id and quentity in array 


 // prndeing oreder table insert using loop

$stmt = $admin -> ret("SELECT * FROM `ordercheckout` WHERE `u_id` = '$uid' ORDER BY `u_id` ASC LIMIT 1");
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
    $oid = $row['or_id'];
}




$i = 0;
$stmt = $admin -> ret("SELECT * FROM `cart` WHERE `u_id` = '$uid'");
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){ 
  
    $productId[$i] = $row['pd_id'];
    $qun[$i] = $row['quantity'];
    $title[$i] = $row['title'];
    $img[$i] = $row['image'];
     $c[$i] = $row['cs_id'];
    $i++;
}


$x=0;
while($x < $i){ 
  
    $pId = $productId[$x];
    $q = $qun[$x];
    $t = $title[$x];
    $im = $img[$x];
     $cs = $c[$x];

     $ostmt = $admin -> ret("SELECT * FROM addsellerproduct WHERE p_id = '$pId'");
     $orow = $ostmt -> fetch(PDO::FETCH_ASSOC); 
     

     $dq = $orow['quantity'];
     $nq = $dq - $q;

     
$ustmt=$admin->cud("UPDATE  addsellerproduct set quantity='$nq' where addsellerproduct.p_id='$pId'","updated");

$stmt = $admin -> cud("INSERT INTO `orderedproduct` ( `p_id`, `u_id`, `or_id`, `quantity` ,`title`,`image`,`cs_id`) VALUES ('".$pId."','".$uid."','".$oid."','".$q."','".$t."','".$im."','".$cs."')","saved");

$x++;

}


 $admin -> redirect('../firstuserpage5');


 ?>

