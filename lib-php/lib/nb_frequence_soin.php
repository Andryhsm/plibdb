<?php
	require "../cnx.php";

	$emailP = $_GET["emailP"];


	$query = $bdd->query("SELECT * FROM oulib_patient WHERE emailP='".$emailP."'");
	
	if($query->fetch()){
		while($d = $query->fetch()){
			echo $d["nomP"];
		}	
	}else{
		echo "Cette email n'est pas dans la base ! ";
	}
?>