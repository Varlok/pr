<?php
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,'http://host2/auto.php');
    curl_setopt($ch, CURLOPT_POST, 1); //разрешаем POST
    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_NOBODY, 0);

    curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=' . $_POST['query']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //разрешаем //возвращать ответ

    $result = curl_exec($ch);  //получаем результат работы в переменную //$result

    curl_close($ch); //закрываем соединение 
    echo $result; //выводим результат
   
    
?>
