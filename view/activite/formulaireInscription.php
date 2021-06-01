<form class="form-horizontal" method="post" action="<?= BASE_URL ?>/activite/inscriptionActivite/"
<fieldset>

        <!-- Form Name -->
        <legend>Formulaire d'Inscription à une Activité</legend>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Id de l'activité</label>  
            <div class="col-md-1">
                <input id="ID_ACTIVITE" name="ID_ACTIVITE" placeholder="ID_ACTIVITE" readonly="yes" class="form-control input-md" type="text" value="<?= (isset($donnees->ID_ACTIVITE) ? $donnees->ID_ACTIVITE : '') ?>">
            </div>
        </div>  
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Présence</label>  
            <div class="col-md-4">
                <select name="PRESENCE">
                    <option value="0">ni vous ni votre conjoint(e)</option>
                    <option value="1">Vous ou votre conjoint(e)</option>
                    <option value="2">Vous et votre conjoint(e)</option>
                </select>
            </div>
        </div>  
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Date de Paiement</label>  
            <div class="col-md-4">
                <input id="DATE_PAIEMENT" name="DATE_PAIEMENT" placeholder="DATE_PAIEMENT" class="form-control input-md" type="date" value="<?= (isset($activite->DATE_PAIEMENT) ? $activite->DATE_PAIEMENT : '') ?>">

            </div>
        </div>        
             <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Il y aura-t-il des enfants</label>  
            <div class="col-md-10">
                <div class="col-md-3" >
                    <input id="NB_ENFANTS" name="NB_ENFANTS" type="radio" value="0" checked>
                    <label for="NB_EXT" >Non</label>
                </div>
                <div class="col-md-9 bg-info">
                    <input id="NB_ENFANTS" name="NB_ENFANTS" type="radio" value="1">
                    <label for="NB_ENFANTS">Oui</label>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nombre d'enfant :</label>  
                        <div class="col-md-4">
                            <input id="NB_ENFANTS" name="NB_ENFANTS" placeholder="NB_ENFANTS" class="form-control input-md" type="number" value="<?= (isset($activite->NB_ENFANTS) ? $activite->NB_ENFANTS : '') ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Il y aura-t-il des personnes extérieures</label>  
            <div class="col-md-10">
                <div class="col-md-3" >
                    <input id="NB_EXT" name="NB_EXT" type="radio" value="0" checked>
                    <label for="NB_EXT" >Non</label>
                </div>
                <div class="col-md-9 bg-info">
                    <input id="NB_EXT" name="NB_EXT" type="radio" value="1">
                    <label for="NB_EXT">Oui</label>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nombre de personnes extérieure :</label>  
                        <div class="col-md-4">
                            <input id="NB_ENFANT" name="NB_EXT" placeholder="NB_EXT" class="form-control input-md" type="number" value="<?= (isset($activite->NB_EXT) ? $activite->NB_EXT : '') ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Montant</label>  
            <div class="col-md-4">
                <input id="MONTANT" name="MONTANT" placeholder="MONTANT" class="form-control input-md" type="text" value="<?= (isset($activite->MONTANT) ? $activite->MONTANT : '') ?>"></input>

            </div>
        </div>
        
        <br>
        
        
        <td><button id="singlebutton" name="singlebutton" class="btn btn-info">S'inscrire</button></td>
   
</fieldset>
</form>
<td><button id="singlebutton" name="singlebutton" class="btn btn-info" onclick="window.location.href = '../../activite/listerActivite'">Annuler</button></td>
