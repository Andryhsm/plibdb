<?php
try
{
	$bdd = new PDO('mysql:host=imedsoftcibast.mysql.db;dbname=imedsoftcibast', 'imedsoftcibast', '1groupeDrn');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>