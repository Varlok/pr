<?php
    $title="lolol";
    session_start();
    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $user_name = $_SESSION['user_name'];
        //$user_access = $_SESSION['user_access'];
    }
    else{
        $user_id = null;
        $user_name = "Гость";
        //$user_access = 0;
    }
    include 'templ/add_order_templ.html';



?>

