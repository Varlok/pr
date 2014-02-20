<?php
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $db = new PDO('mysql:host=localhost;dbname=db','root','earthn2160');
    $db1 = $db -> prepare("select * from user where login = :login and pass = :pass");
    $db1 -> bindParam(':login',$login);
    $db1 -> bindParam(':pass',$pass);
    $db1 -> execute();
    $res = $db1 -> fetchAll();
    $result = serialize($res);
    echo $result;
    //$res -> setFetchMode(PDO::FETCH_ASSOC);
   // foreach($res as $row)//-> fetch(PDO::FETCH_ASSOC))
   // { 
   //     echo $row['id'];
   //     echo $row['login'];
        
   // }
?>