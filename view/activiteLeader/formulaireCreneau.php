<legend>Ajout d'un créneau </legend>
<form class='form-horizontal'method="post" action="<?= BASE_URL ?>/activiteLeader/<?= (isset($creneauP[0]->ID_ACTIVITE) ? 'modifierCreneau/' : 'creerCreneau/') .$activite->ID_ACTIVITE. (isset($creneauP[0]->ID_ACTIVITE) ? '_' . $creneauP[0]->NUM_CRENEAU : '' ) ?>">
    creerCreneau
    <div class="form-group">
        <label class="col-md-2 control-label" for="textinput">Numéro activité :</label>  
        <div class="col-md-4">
            <input id="ID_ACTIVITE" name="ID_ACTIVITE" placeholder="N° activité" class="form-control input-md" type="=text" value="<?= (isset($activite->ID_ACTIVITE) ? $activite->ID_ACTIVITE : 'ERREUR') ?>"readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="textinput">Nom activité :</label>  
        <div class="col-md-4">
            <input id="NOM_LEADER" name="NOM_LEADER" placeholder="Nom du Leader" class="form-control input-md" type="text" value="<?= (isset($activite->NOM) ? $activite->NOM : 'ERREUR') ?>"readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="textinput">Détail :</label>  
        <div class="col-md-4">
            <textarea id="PRENOM_LEADER" name="PRENOM_LEADER" placeholder="Détail de l'activité" class="form-control input-md" type="text" readonly><?= (isset($activite->DETAIL) ? $activite->DETAIL : 'ERREUR') ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="textinput">Liste des créneaux déjà existants :</label>  
        <ul class="col-md-4">
            <?php
            foreach ($creneauG as $c) {
                if ($activite->ID_ACTIVITE == $c->ID_ACTIVITE) {
                    echo '<li>' . $c->DATE_CRENEAU . ' - ' . $c->HEURE_CRENEAU . '</li>';
                }
            }
            ?>
        </ul>
    </div>
    <hr>

    <div class = "form-group">
        <label class = "col-md-2 control-label" for = "textinput">Date créneau :</label>
        <div class = "col-md-4">
            <input id = "DATE_CRENEAU" name = "DATE_CRENEAU" placeholder = "N° activité" class = "form-control input-md" type = "date" value = "<?= (isset($creneauP[0]->DATE_CRENEAU) ? $creneauP[0]->DATE_CRENEAU : '') ?>">
        </div>
    </div>
    <div class = "form-group">
        <label class = "col-md-2 control-label" for = "textinput">Heure créneau :</label>
        <div class = "col-md-4">
            <input id = "HEURE_CRENEAU" name = "HEURE_CRENEAU" placeholder = "N° activité" class = "form-control input-md" type = "time" value = "<?= (isset($creneauP[0]->HEURE_CRENEAU) ? $creneauP[0]->HEURE_CRENEAU : '') ?>">
        </div>
    </div>
    <div class = "form-group">
        <label class = "col-md-2 control-label" for = "textinput">Nombre de personnes pour le créneau :</label>
        <div class = "col-md-4">
            <input id = "EFFECTIF_CRENEAU" name = "EFFECTIF_CRENEAU" placeholder = "Nombre de participants" class = "form-control input-md" value = "<?= (isset($creneauP[0]->EFFECTIF_CRENEAU) ? ($creneauP[0]->EFFECTIF_CRENEAU) : '') ?>">
        </div>
    </div>
    <div class = "form-group">
        <label class = "col-md-2 control-label" for = "singlebutton"></label>
        <div class = "col-md-4">
            <button id = "singlebutton" name = "singlebutton" class = "btn btn-info">Valider</button>
            <input type="button" id="singlebutton" name="singlebutton" class="btn btn-danger" onclick="window.location.href = '../supprimerCreneau/<?= (isset($creneauP[0]->ID_ACTIVITE) ? $creneauP[0]->ID_ACTIVITE . '_' . $creneauP[0]->NUM_CRENEAU : '' ) ?>'" value="Supprimer">

        </div>
    </div>
</form>