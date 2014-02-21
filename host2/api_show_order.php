<?php

 
    $db = new PDO('mysql:host=localhost;dbname=db','root','earthn');
    $db1 = $db -> prepare("SELECT   id,goods.name,count,house.name,groupe.name
from db.order, db.house, db.goods, db.groupe
where  order.Id_house=house.Id_house
		and order.ID_goods=goods.ID_goods
		and order.ID_groupe=groupe.ID_groupe ;");
    $db1 -> execute();
    $res = $db1 -> fetchAll();
    $result = serialize($res);
    echo $result;
    
?>

