<?php
	require 'lib-php/cnx.php';

	$status = "lu";
	$mail = ($_POST['email']);

	$req = "SELECT * FROM oulib_liste_demande WHERE emailP ='".$mail."' AND (status = 'accepter' OR status = 'refuser')";
	$enr = $bdd->query($req);
	$numEnr = $enr->rowCount();
	$data = $enr->fetch();
	if ($numEnr > 0) 
	{
		echo("Notification <span class='badge active'>".$numEnr."</span>");
	} else {

		echo("Notification");
	}
?>
