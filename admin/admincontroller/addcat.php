 <?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();


//create
if(isset($_POST['add']))
{

  
  

  $a=$_POST['cat'];
  

 $stmt=$admin -> cud("INSERT INTO `addcat` (cname) VALUES ('$a')","saved");

  echo "<script>alert('Category Added Successfully');window.location='../viewcat.php';</script>";
 }

//delete

 if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $stmt=$admin -> cud("DELETE FROM `addcat` WHERE c_id='$id'","deleted");
  echo "<script>alert('Deleted Successfully');window.location='../viewcat.php';</script>";
}


//update

if(isset($_POST['update']))
{

  
  

  $a=$_POST['cat'];
  $id=$_POST['catupdate'];
  

$stmt=$admin -> cud("UPDATE `addcat` SET `cname`='$a' WHERE `c_id`='$id'","updated");

    echo "<script>alert('Updated Successfully');window.location='../viewcat.php';</script>";
 }

?>