
     


<?php


define('DIR','../../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

        //delete
if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $stmt=$admin -> cud("DELETE FROM `cart` WHERE `pd_id`='$id'","deleted");
  $admin -> redirect('../firstuserpage3');
}

?>