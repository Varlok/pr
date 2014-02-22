<?php
//session_start();
//$id="'".$_GET['id']."'";
$id=$_POST['id'];

		$db = new PDO('mysql:host=localhost;dbname=db','root','earthn');
		$db4 = $db -> prepare("DELETE FROM `db`.`order` WHERE `id`=:id");
		$db4 -> bindParam(':id',$id);
		$db4 -> execute();
	
        
?>

