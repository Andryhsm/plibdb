<?php

	require "cnx.php";

	session_start();


	$emailI = urldecode($_GET["emailI"]);
	$date_soin1 = urldecode($_GET["date_soin"]);
	$heure_soin = urldecode($_GET["heure_soin"]);
	$commentaire = urldecode($_GET["commentaire"]);

	$date = explode("-", $date_soin1);

	$date_soin = $date[2]."-".$date[1]."-". $date[0]."";
	
	$emailP = $_SESSION["email"];

	$query = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailP=\"".$emailP."\" AND emailI=\"".$emailI."\"");

	if($query->rowCount() == 0){

			
			$nomP = $_SESSION["nomP"];
			$prenomP = $_SESSION["prenomP"];	
			$telP = $_SESSION["telP"];
			$rueP = $_SESSION["rueP"];
			$codePostalP = $_SESSION["code-postalP"];
			$villeP = $_SESSION["villeP"];
			$typeSoin1 = $_SESSION["type-soinP1"];
			$typeSoin2 = $_SESSION["type-soinP2"];
			$typeSoin3 = $_SESSION["type-soinP3"];
			$typeSoin4 = $_SESSION["type-soinP4"];
			$frequenceSoin1 = $_SESSION["frequence-soin1"];
			$frequenceSoin2 = $_SESSION["frequence-soin2"];
			$frequenceSoin3 = $_SESSION["frequence-soin3"];
			$frequenceSoin4 = $_SESSION["frequence-soin4"];
			$photo = $_SESSION["photo"];
	

			$status = "attente";

			if($typeSoin2 != null)
				$typeSoinP = $typeSoin1. " - ". $typeSoin2;
			if($typeSoin3 != null)
				$typeSoinP = $typeSoin1. " - ". $typeSoin2 . " - ". $typeSoin3;
			if($typeSoin4 != null)
				$typeSoinP = $typeSoin1. " - ". $typeSoin2 . " - ". $typeSoin3 ." - ". $typeSoin4;
			

			if($frequenceSoin2 != null)
				$frequenceSoinP = $frequenceSoin1. " - ". $frequenceSoin2;
			if($frequenceSoin3 != null)
				$frequenceSoinP = $frequenceSoin1. " - ". $frequenceSoin2 . " - ". $frequenceSoin3;
			if($frequenceSoin4 != null)
				$frequenceSoinP = $frequenceSoin1. " - ". $frequenceSoin2 . " - ". $frequenceSoin3 ." - ". $frequenceSoin4;

			$date = "heure";
			$q = "INSERT INTO `oulib_liste_demande` (`photo`, `emailI`, `nomP`, `prenomP`, `telP`, `typeSoinP`, `commentaire`, `frequenceSoin`, `status`, `emailP`, `date_soin`, `heure_soin`) VALUES('$photo', '$emailI', '$nomP', '$prenomP', '$telP', '$typeSoinP', '$commentaire', '$frequenceSoinP', '$status', '$emailP', '$date_soin', '$heure_soin')";

			//echo $q;

			$bdd->exec($q) or die(print_r($bdd->ErrorInfo()));

		echo "reussi";
	}else{
		echo "existe";
	}
?>