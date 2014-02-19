<?php
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,'http://host2/api_get_user.php');
    curl_setopt($ch, CURLOPT_POST, 1); //разрешаем POST
    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_NOBODY, 0);

    curl_setopt($ch, CURLOPT_POSTFIELDS, "user=".$_POST['user']);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //разрешаем //возвращать ответ

    $result = curl_exec($ch);  //получаем результат работы в переменную //$result

    curl_close($ch);
   // echo $result;
    $res = unserialize($result);
    
    foreach($res as $row)
    { 
        echo "id: ".$row['id'];
        echo " login: ".$row['login'];
        echo " access: ".$row['access'];
        echo "<br>";
        
    }
    
    
    
?>