<?php
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    session_start();

    $ch = curl_init();
    $login = 'login=' . $login . '&pass=' . $pass;
    curl_setopt($ch, CURLOPT_URL,'http://host2/api_autorize.php');
    curl_setopt($ch, CURLOPT_POST, 1); //разрешаем POST
    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_NOBODY, 0);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $login);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //разрешаем //возвращать ответ

    $result = curl_exec($ch);  //получаем результат работы в переменную //$result

    curl_close($ch);
   // echo $result;
    $res = unserialize($result);
    if(!empty($res)){
        foreach($res as $row)
        { 
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['login'];  
        }
        echo $_SESSION['user_name'];
    }
    else{
        echo "костыльКОЛЕСОкостыль";
    }

    
    
    
    
    



?>

