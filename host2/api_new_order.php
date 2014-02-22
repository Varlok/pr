<?php

                                                        $goods = $_POST['goods'];
                                                        $count = $_POST['count'];
                                                        $house = $_POST['house'];
                                                        $groupe = $_POST['groupe'];
    
        $db = new PDO('mysql:host=localhost;dbname=db','root','earthn');
        //$qwe="INSERT INTO `db`.`order` (`id`, `id_house`, `id_goods`, `id_groupe`, `count`) VALUES ('2', '2', '2', '2', '2');<br>";
        
        $qwe2="INSERT INTO `db`.`order` ( `id_house`, `id_goods`, `id_groupe`, `count`) VALUES ( '".$house."', '".$goods."', '".$groupe."', '".$count."');";
        
$db2 = $db -> prepare($qwe2);
   
//                                                    $db2 -> bindParam(':house','1');//$house);
//                                                    $db2 -> bindParam(':goods','1');//$goods);
//                                                    $db2 -> bindParam(':groupe','1');//$groupe);
//                                                    $db2 -> bindParam(':count','1');//$count);
            
        $db2 -> execute();
        

?>