<?php
	require_once("functions.php");
	//data.php
	// siia pääseb ligi sisseloginud kasutaja
	//kui kasutaja ei ole sisseloginud,
	//sunnab ta data.php lehele
		if(!isset($_SESSION["logged_in_user_id"])){
		header("Location: data.php");
	}
	
	//kasutaja tahab välja logida
	if(isset($_GET["logout"])) {
		//aadressireal on olemas muutuja logout
		
		//kustutame kõik sessioon muutujad ja peatame sessiooni
		session_destroy();
		
		header("Location: login.php");
	}
	
?>
<p>
	Jou, <?=$_SESSION["logged_in_user_email"];?>
	<a href="?logout=1"> Logi välja <a>
