 <?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();


if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $stmt=$admin -> cud("DELETE FROM `cancelseller` WHERE `cs_id`='".$id."'","deleted");
  $admin -> redirect('../cancelseller');
}




?>