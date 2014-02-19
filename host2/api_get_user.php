<?php 
    $user = $_POST['user'];
    $db = new PDO('mysql:host=localhost;dbname=db','root','earthn');
    $db1 = $db -> prepare("select * from user where login=:user");
    $db1 -> bindParam(':user',$user);

    $db1 -> execute();
    $res = $db1 -> fetchAll();
    $result = serialize($res);
   
    echo $result;
    
    
?>