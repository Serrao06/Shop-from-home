<?php


define('DIR','../../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

if(isset($_POST['register'])){

    
    $name = $_POST['name'];
    $a = $_POST['a'];
    
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
    $loc = $_POST['loc'] ;
   


  $targetDir = "../../admin/admincontroller/photo/upload";
  $image=$targetDir.basename($_FILES["image"]["name"]); // @image = "upload/c.jpg"
  move_uploaded_file($_FILES['image']["tmp_name"], $image);

  $targetDirr = "../../admin/admincontroller/photo/upload";
  $pdf=$targetDirr.basename($_FILES["pdf"]["name"]); // @image = "upload/c.jpg"
  move_uploaded_file($_FILES['pdf']["tmp_name"], $pdf);


    $stmt = $admin -> cud("INSERT INTO `seller` ( `name`, `phone`, `email`, `password`, `image`,`pdf`,`l_name`) VALUES ('".$name."','".$a."','".$email."','".$password."','".$image."','".$pdf."','$loc')","saved");
    $admin -> redirect('../sellerlogin');

    
}


//login
 if(isset($_POST['login']))
{

  
  $b=$_POST['email'];
  $d=$_POST['password'];
  

   $stmt=$admin->ret("SELECT * from `cancelseller` WHERE email='$b' AND password='$d'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['cs_id'];
            $_SESSION['cs_id']=$id;
             $admin->redirect('../firstsellerpage');
      }else{
          echo"<script>
            alert('you have entered wrong email or password');
            window.location.href='../sellerlogin.php';
          </script>";
        }
   

  }
?>