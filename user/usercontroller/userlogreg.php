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
   



    $stmt = $admin -> cud("INSERT INTO `user` ( `name`, `phone`, `email`, `password`) VALUES ('".$name."','".$a."','".$email."','".$password."')","saved");
    $admin -> redirect('../userlogin');

    
}


//login
 if(isset($_POST['login']))
{

  
  $b=$_POST['email'];
  $d=$_POST['password'];
  

   $stmt=$admin->ret("SELECT * from `user` WHERE email='$b' AND password='$d'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['u_id'];
            $_SESSION['u_id']=$id;
             $admin->redirect('../firstuserpage');
      }else{
          echo"<script>
            alert('you have entered wrong email or password');
            window.location.href='../userlogin.php';
          </script>";
        }
   

  }

  //password confirm using email

   if(isset($_POST['cp']))
{

  
  $b=$_POST['email'];

  

   $stmt=$admin->ret("SELECT * from `user` WHERE email='$b'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['u_id'];
            $_SESSION['u_id']=$id;
            $admin->redirect('../userforgotpassword');
      }else{
           echo"<script>
            alert('you have entered wrong email');
            window.location.href='../userforgotemail.php';
          </script>";
           // $admin->redirect('../password');
        }
   

  }


//password update
  if(isset($_POST['update']))
{

   
  $password=$_POST['password'];
  $id=$_SESSION['u_id'];


 $stmt=$admin -> cud("UPDATE user SET password='$password' WHERE u_id='$id'","updated");

 $admin -> redirect('../userlogin');
 }

?>