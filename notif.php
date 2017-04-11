<?php
	require 'lib-php/cnx.php';

	$mail = ($_POST['email']);

	$req = "SELECT * FROM oulib_liste_demande WHERE emailP ='".$mail."' AND (status = 'accepter' OR status = 'refuser')";
	$enr = $bdd->query($req);
	$numEnr = $enr->rowCount();

	if($numEnr != 0)
	{
		while($data = $enr->fetch()) 
		{
			$name = $bdd->query("SELECT nomI, prenomI FROM oulib_infirmiere WHERE emailI = '".$data['emailI']."'");
			while($valny = $name->fetch()) 
			{
				if ($data['status'] == "refuser") 
				{
					echo("
						<div class='panel panel-danger notification'>
						  <div class='panel-heading'>
						    <h4 class='panel-title'><span class='glyphicon glyphicon-remove'></span>&nbsp;&nbsp;Réponse à votre demande de soin</h4>
						  </div>
						  <div class='panel-body'>
						    	Votre demande a été annulée par l'infirmière  ".$valny['nomI']."
						    	<br>
						    		<input type='hidden' class='{$data['id']}' value='{$data['status']}'>
						    	<div class='pull-right'>
						    		<a type='button' class='btn btn-default' id='{$data['id']}' onClick='showId({$data['id']});' data-toggle='tooltip' data-placement='right' title='' data-original-title='Tooltip on right'>Vue &nbsp;&nbsp;<span class='glyphicon glyphicon-eye-open'></span>
						    		</a>
						    	</div>
						  </div>
						</div>");
				} elseif ($data['status'] == "accepter") 
				{
					echo("
						<div class='panel panel-success notification'>
						  <div class='panel-heading'>
						    <h4 class='panel-title'><span class='glyphicon glyphicon-ok'></span>&nbsp;&nbsp;Réponse à votre demande de soin</h4>
						  </div>
						  <div class='panel-body'>
								Votre demande vient d'être accéptée par l'infirmière  ".$valny['nomI']."
						    	<br>
						    		<input type='hidden' class='{$data['id']}' value='{$data['status']}'>
						    	<div class='pull-right'>
						    		<a type='button' class='btn btn-default' id='{$data['id']}' onClick='showId({$data['id']});'>Vue &nbsp;&nbsp;<span class='glyphicon glyphicon-eye-open'></span>
						    		</a>
						    	</div>
						  </div>
						</div>");
				}
			}


		}
	}
?>