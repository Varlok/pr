<?php
	error_reporting(E_ALL);
	if(isset($_POST['action'])) {
		echo $_POST['action'] + 15;
	}
 
 
?>