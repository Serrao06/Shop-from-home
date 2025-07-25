<?php

define('DIR','../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();

    if(isset($_SESSION['cs_id'])){
        session_destroy();
        unset($_SESSION['cs_id']);
         $admin -> redirect('index');
    }  

?>