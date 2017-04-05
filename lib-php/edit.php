<?php
    require_once 'cnx.php';

    $id = ($_POST["id"]);

    $status = ($_POST["status"]);

    if ($bdd->exec("UPDATE `liste_demande` SET `status` = '" . $status . "' WHERE `id`= " . $id . ""))
    {
        echo 'reussi';
    }
    else {
        print_r($bdd->ErrorInfo());
    }
