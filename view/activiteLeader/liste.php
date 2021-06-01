<div class="alert-info" name="info"><?= (isset($info) ? $info : '') ?></div> <br>
<section class="table-responsive">
    <table id="liste_tournoi" class="table table-bordered table-condensed table-striped">
        <!-- entête tableau -->
        <tr>
            <td>Id leader</td>
            <td>Nom</td>
            <td>Detail</td>
            <td>Adresse de l'activité</td>
            <td>Date de l'activité</td>
            <td>Code postal </td>
            <td>Ville</td>
            <td>Age Minimum </td>
            <td>Forfait </td>
            <td>Tarif forfait </td>
            <td>Tarif unitaire </td>
            <td>Statut</td>
            <td>Ouverture au personne extérieur </td>                   
            <td>Coût Adulte </td>
            <td>Coût Enfant </td>
            <td>Indication aux participant</td>
            <td>Information importante pour les participants</td>
            <td>Créneaux</td>
        </tr>
        <!-- valeur tableau -->           
        <?php foreach ($activite as $a): ?>
            <tr>
                <td><?= $a->ID_LEADER ?></td>
                <td><?= $a->NOM ?></td>
                <td><?= $a->DETAIL ?></td>
                <td><?= $a->ADRESSE ?></td>
                <td><?= $a->DATE_ACTIVITE ?></td>
                <td><?= $a->CP ?></td>
                <td><?= $a->VILLE ?></td>
                <td><?= $a->AGE_MINIMUM . " ans" ?></td>
                <td><?php if ($a->FORFAIT == 1){ echo "oui"; } elseif ($a->FORFAIT == 0) { echo "non"; }  ?></td>
                <td><?= $a->TARIF_FORFAIT . " €" ?></td>
                <td><?= $a->TARIF_UNIT . " €" ?></td>
                <td><?php
                            if ($a->STATUT == "A"){
                                echo 'En Attente';
                            }
                            elseif ($a->STATUT == "V"){
                                echo 'Validée';
                            }
                            elseif ($a->STATUT == "O"){
                                echo 'Ouvert';
                            }
                            elseif ($a->STATUT == "F"){
                                echo 'Fermée';
                            }
                            elseif ($a->STATUT == "T"){
                                echo 'Terminée';
                            } ?>
                </td>
                <td><?php if ($a->OUVERT_EXT == 1){ echo "oui"; } elseif ($a->OUVERT_EXT == 0) { echo "non"; }  ?></td>
                <td><?= $a->COUT_ADULTE . " €" ?></td>
                <td><?= $a->COUT_ENFANT . " €" ?></td>
                <td><?= $a->INDICATION_PARTICIPANT ?></td>
                <td><?= $a->INFO_IMPORTANT_PARTICIPANT ?></td>
                <td>
                    <?php
                    foreach ($creneau as $c) {
                        if ($a->ID_ACTIVITE == $c->ID_ACTIVITE) {
                            echo '<button id="singlebutton" name="singlebutton" class="btn btn-' . (($c->STATUT) == 'A' ? 'warning' : ($c->STATUT == 'V' ? 'info' : ($c->STATUT == 'O' ? 'success' : ($c->STATUT == 'F' ? 'danger' : ($c->STATUT == 'T' ? 'secondary' : 'secondary')))) ) . '" onclick="window.location.href = \'../activiteLeader/formulaireCreneau/' . $id['idActivite'] = $a->ID_ACTIVITE . $id['idCreneau'] = (isset($c->NUM_CRENEAU) ? '_' . $c->NUM_CRENEAU : '') . '\'">' . $c->DATE_CRENEAU . ' - ' . $c->HEURE_CRENEAU . '</button>';
                        }
                    }
                    echo '<button id="singlebutton" name="singlebutton" class="btn btn-info" onclick="window.location.href = \'../activiteLeader/formulaireCreneau/' . $a->ID_ACTIVITE . '\'">+</button>';
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>                
    </table>
</form>
</section>

