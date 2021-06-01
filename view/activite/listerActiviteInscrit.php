<div class="alert-info" name="info"><?= (isset($info) ? $info : '') ?></div> <br>
<section class="table_responsive">
    <h2>Les activités auxquelles vous etes inscrits</h2>
    <table class="table table-bordered table-condensed table-striped">
        <tr>
        <td>Nom</td>   
        <td>Détail</td>
        <td>Ville</td>
        <td>Date de l'activité</td>
        <td>information importante</td>
        <td>Montant</td>
        <td>Voir</td>
        </tr>
        <?php foreach ($inscription as $ia): ?>   
            <tr>

                <td><?= $ia->NOM ?></td>
                <td><?= $ia->DETAIL ?></td>
                <td><?= $ia->VILLE ?></td>
                <td><?= $ia->DATE_ACTIVITE ?></td>
                <td><?= $ia->INDICATION_PARTICIPANT?></td>
                <td><?= $ia->MONTANT . " €"?></td>
                <td><button id="singlebutton" name="singlebutton" class="btn btn-info" onclick="window.location.href = '../activite/mesActivites/<?= $ia->ID_ACTIVITE?>'">Voir</button></td>
            </tr>

        <?php endforeach; ?>
    </table>
</section>
