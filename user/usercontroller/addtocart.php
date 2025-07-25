<?php


define('DIR','../../');
require_once DIR . '/config.php';
$control = new Controller();
$admin = new Admin();


if(isset($_POST['add'])){

    $vid = $_POST['vid'];
    $qun = $_POST['quantity'];
    $uid = $_POST['u_id'];
    $tid = $_POST['name'];

     $image = $_POST['i'];

     $csid = $_POST['cs_id'];

    


    $stmt = $admin->ret("SELECT * FROM `cart` WHERE `pd_id` = '$vid' AND `u_id` = '$uid'");
    $row = $stmt -> fetch(PDO::FETCH_ASSOC);
    $num = $stmt -> rowcount();
    if($num>0){
        $updatedquant = 0;
       $Dqun =$row['quantity'];
       $updatedquant = $qun + $Dqun;

        // echo "update" ;
        $stmt = $admin->cud("UPDATE `cart` SET `quantity` = '$updatedquant' WHERE `cart`.`pd_id` = '$vid' AND `cart`.`u_id` = '$uid'","updated");
        $admin->redirect('../firstuserpage3');
     
    }else{
          $stmt = $admin -> cud("INSERT INTO `cart` (`pd_id`, `quantity`, `u_id` ,`title`,`image`,`cs_id`) VALUES ('".$vid."','".$qun."','".$uid."','".$tid."','".$image."','".$csid."')","saved");
            $admin->redirect('../firstuserpage3');
           // echo "inser";
          
    }
   

}


?>
