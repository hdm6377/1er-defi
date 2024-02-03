<?php
date_default_timezone_set('UTC');
$id = $_POST["id"];
$mdp = $_POST["mdp"];
$messageChiffrer = "U2FsdGVkX1/FIxsjqgDQG6WCB3tQ6WR0ajQST3Xvb8o=";
$cle = "JeSuisUneCleDeDechiffrement";

if ($id == "admin" and $mdp == "admin"){
	echo $messageChiffrer;
}else{
	if($id == "admin" and $mdp == "password"){
		echo $cle; 
	}else{
		echo "identification invalide, reessayer.";
	}
}
?>