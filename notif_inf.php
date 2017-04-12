<?php

        include_once "./lib-php/cnx.php";
        $email = ($_POST['email']);
        /*$req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '" . $_SESSION['email'] . "' AND status = 'attente'");
        $b = FALSE;
        while ($data = $req->fetch()) {
            ?>
            <table class="table table-hover">
                <tbody id="content">
                    <tr class="<?php $b = TRUE;
        echo($data['id']); ?>">
                        <td width='15%'>
                            <img class="thumbnail img-responsive" style="vertical-align: center;" width="130px" src="./image-person/<?php echo($data['photo']); ?>">
                        </td>
                        <td width='45%'>
                            <?php echo "<h4><b>" . $data['nomP'] . " " . $data['prenomP'] . "</b></h4>"; ?>
        <?php echo($data['telP']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo($data['emailP']); ?><br>
                            <b>Type de soin:</b> <?php echo($data['typeSoinP']); ?> <br>
                            <b>Heure de soin:</b> <?php echo($data['date']); ?> <br>
                            <b>Fréquence de soin:</b> <?php echo($data['frequenceSoin']); ?>
                        </td>
                        <td width='40%'>
                            <br><br>
        <?php echo($data['commentaire']); ?>
                            <br><br><br>
                            <div class="pull-right">
                                <a class="btn btn-success accepter">Accepter</a>&nbsp;&nbsp
                                <a class="btn btn-danger refuser">Réfuser</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php
        } if ($b == FALSE) {
            echo '<center><h3>Vous n\'avez pas encore de demande</h3></center>';
        }*/

        $req = $bdd->query("SELECT * FROM oulib_liste_demande WHERE emailI = '".$email."' AND status = 'attente'");
        $num = $req->rowCount();

        if($num>0)
        {
            while ($data = $req->fetch()) 
            {
                $heures = explode(':', $data['heure_soin']);
                $heure = $heures[0].":".$heures[1];
                echo("
                    <tr class='{$data['id']}'>
                        <td width='15%'>
                            <img class='thumbnail img-responsive' style='vertical-align: center;' width='130px' src='./image-person/{$data["photo"]}'>
                        </td>
                        <td width='45%'>
                            <h4><b> {$data['nomP']} {$data['prenomP']}</b></h4>
                            {$data['telP']}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {$data['emailP']}<br>
                            <b>Type de soin:</b> {$data['typeSoinP']}<br>
                            <b>Date de soin:</b> {$data['date_soin']}<br>
                            <b>Heure de soin:</b> {$heure}<br>
                            <b>Fréquence de soin:</b> {$data['frequenceSoin']}
                        </td>
                        <td width='40%'>
                            <br><br>
                                {$data['commentaire']}
                            <br><br><br>
                            <div class='pull-right'>
                                <a class='btn btn-success accepter' onClick='accepter({$data['id']});'>Accepter</a>&nbsp;&nbsp
                                <a class='btn btn-danger refuser' onClick='refuser({$data['id']});'>Réfuser</a>
                            </div>
                        </td>
                    </tr>");
            }
        } else {
            echo("<center><h3>Vous n'avez pas encore de demande</h3></center>");
        }
?>