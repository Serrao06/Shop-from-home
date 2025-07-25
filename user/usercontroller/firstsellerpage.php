<?php


define('DIR','../../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['add'])){

    
    $a = $_POST['name'];
    $b = $_POST['title'];

    $d = $_POST['aname'] ;
    $e = $_POST['pname'] ;
    $f = $_POST['price'] ;
    $g = $_POST['discount'] ;
    $h = $_POST['quantity'];
    $i = $_POST['text'];
    $j = $_POST['cs_id'];
    $lname = $_POST['lname'];


  $targetDir = "../../admin/admincontroller/photo/upload";
  $image=$targetDir.basename($_FILES["image"]["name"]); // @image = "upload/c.jpg"
  move_uploaded_file($_FILES['image']["tmp_name"], $image);


    $stmt = $admin -> cud("INSERT INTO `addsellerproduct` ( `name`, `cname`, `mdat`, `edat`, `price`, `discount`, `quantity`, `description`, `image`, `cs_id`,`l_name`) VALUES ('".$a."','".$b."','".$d."','".$e."','".$f."','".$g."','".$h."','".$i."','".$image."','".$j."','$lname')","saved");
        echo "<script>alert('Product Added Successfully');window.location='../firstsellerpage.php';</script>";

    
}

if(isset($_POST['update'])){

    
    $a = $_POST['name'];
    $b = $_POST['title'];

    $d = $_POST['aname'] ;
    $e = $_POST['pname'] ;
    $f = $_POST['price'] ;
    $g = $_POST['discount'] ;
    $h = $_POST['quantity'];
    $i = $_POST['text'];
    $j = $_POST['cs_id'];
   
   $id= $_POST['id'];

  $targetDir = "../../admin/admincontroller/photo/upload";
  $image=$targetDir.basename($_FILES["image"]["name"]); // @image = "upload/c.jpg"
  move_uploaded_file($_FILES['image']["tmp_name"], $image);


$stmt=$admin -> cud("UPDATE `addsellerproduct` SET `name`='$a',`cname`='$b',`mdat`='$d',`edat`='$e',`price`='$f',`discount`='$g',`quantity`='$h',`description`='$i',`image`='$image',`cs_id`='$j' WHERE `p_id`='$id'","updated");
   
    $admin -> redirect('../firstsellerpage1');

    
}

?>