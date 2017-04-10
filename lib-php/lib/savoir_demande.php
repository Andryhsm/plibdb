<?php
	
		require '../cnx.php';


		$emailP = $_GET["emailP"];

		$query = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailP='".$emailP."'");
		
		if($query->fetch()){
			echo "existe";
		}else{
			echo "inexiste";
		}
?>