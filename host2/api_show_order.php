<?php

 
    $db = new PDO('mysql:host=localhost;dbname=db','root','earthn2160');
    $db1 = $db -> prepare("select * from order");
    $db1 -> execute();
    $res = $db1 -> fetchAll();
    $result = serialize($res);
    echo $result;
    
?>

