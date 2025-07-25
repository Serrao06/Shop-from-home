<?php
define('DIR', '../../');
require_once DIR .'config.php';

$control = new Controller(); 
$admin = new Admin();


//create
if(isset($_POST['add']))
{

  
  

  $a=$_POST['loc'];
  

 $stmt=$admin -> cud("INSERT INTO `addloc` (`name`) VALUES ('$a')","saved");

  echo "<script>alert('Category Added Successfully');window.location='../viewloc.php';</script>";
 }

//delete

 if(isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $stmt=$admin -> cud("DELETE FROM `addloc` WHERE l_id='$id'","deleted");
  echo "<script>alert('Deleted Successfully');window.location='../viewloc.php';</script>";
}


//update

if(isset($_POST['update']))
{

  
  

  $a=$_POST['loc'];
  $id=$_POST['locupdate'];
  

$stmt=$admin -> cud("UPDATE `addloc` SET `name`='$a' WHERE `l_id`='$id'","updated");

    echo "<script>alert('Updated Successfully');window.location='../viewloc.php';</script>";
 }

?>