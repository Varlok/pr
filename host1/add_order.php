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
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,'http://host2/api_show_order.php');
    curl_setopt($ch, CURLOPT_NOBODY, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //разрешаем //возвращать ответ
    $result = curl_exec($ch);  //получаем результат работы в переменную //$result
    curl_close($ch);
    
    
    
    $res = unserialize($result);
    
    print_r($res);
    $table = '<tr><td>Id</td><td>Обарудование</td><td>Количество</td><td>Адрес</td><td>Группа доставки</td><td></td></tr>';
    foreach ($res as $row) {
        $table=$table.'<tr id='.$row['id'].'><td>'.$row['id'].'</td><td>'.$row['1'].'</td><td>'.$row['count'].'</td><td>'.$row['3'].'</td><td>'.$row['name'].'</td><td><button onclick="deleteOrder('.$row['id'].')">Удалить</button></td></tr>';
    }
    include 'templ/add_order.html';



?>






