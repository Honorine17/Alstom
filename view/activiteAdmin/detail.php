<form class="form-horizontal" method="post" action="<?= BASE_URL ?>/activiteAdmin/<?= (isset($action) ? 'creer' : 'modifier') ?>/<?= (isset($activite->ID_ACTIVITE) ? $activite->ID_ACTIVITE : '') ?>">

    <fieldset>

        <!-- Form Name -->
        <legend>Activité </legend>
        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput"> Numéro d'activité :</label>  
            <div class="col-md-1">
                <input id="ID_ACTIVITE" name="ID_ACTIVITE"  disabled class="form-control input-md" type="text" value="<?= (isset($activite->ID_ACTIVITE) ? $activite->ID_ACTIVITE : '') ?>">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Nom de l'activité <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <input id="NOM" name="NOM" placeholder="Nom de l'activité" class="form-control input-md" type="text" value="<?= (isset($activite->NOM) ? $activite->NOM : '') ?>">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Détail <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <input id="DETAIL" name="DETAIL" placeholder="Détail" class="form-control input-md" type="text" value="<?= (isset($activite->DETAIL) ? $activite->DETAIL : '') ?>">

            </div>
        </div>    
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Date de l'activité <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <input id="DATE_ACTIVITE" name="DATE_ACTIVITE" placeholder="Date de l'activité" class="form-control input-md" type="date" value="<?= (isset($activite->DATE_ACTIVITE) ? $activite->DATE_ACTIVITE : '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Date de création :</label>  
            <div class="col-md-4">
                <input id="DATE_CREATION" name="DATE_CREATION" placeholder="Date de création" class="form-control input-md" type="date" value="<?= (isset($activite->DATE_CREATION) ? $activite->DATE_CREATION : '') ?>">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Date limite du paiement :</label>  
            <div class="col-md-4">
                <input id="DATE_PAIEMENT" name="DATE_PAIEMENT" placeholder="Date de paiement" class="form-control input-md" type="date" value="<?= (isset($activite->DATE_PAIEMENT) ? $activite->DATE_PAIEMENT : '') ?>">

            </div>
        </div>
       
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Adresse <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <input id="ADRESSE" name="ADRESSE" placeholder="ADRESSE" class="form-control input-md" type="text" value="<?= (isset($activite->ADRESSE) ? $activite->ADRESSE : '') ?>">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Code Postal <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <input id="CP" name="CP" placeholder="CP" class="form-control input-md" type="text" value="<?= (isset($activite->CP) ? $activite->CP : '') ?>">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Ville <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <input id="VILLE" name="VILLE" placeholder="VILLE" class="form-control input-md" type="text" value="<?= (isset($activite->VILLE) ? $activite->VILLE : '') ?>">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Age minimium :</label>  
            <div class="col-md-4">
                <input id="AGE_MINIMUM" name="AGE_MINIMUM" placeholder="AGE_MINIMUM" class="form-control input-md" type="text" value="<?= (isset($activite->AGE_MINIMUM) ? $activite->AGE_MINIMUM : '') ?>">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Statut <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <select name="STATUT">
                    <option value="A"<?php if($activite->STATUT == "A"){echo "selected";}?>>1- En attente</option>
                    <option value="V"<?php if($activite->STATUT == "V"){echo "selected";}?>>2- Validé</option>
                   <option value="O"<?php if($activite->STATUT == "O"){echo "selected";}?>>3- Ouvert</option>
                    <option value="F"<?php if($activite->STATUT == "F"){echo "selected";}?>>4- Fermer</option>
                    <option value="T"<?php if($activite->STATUT == "T"){echo "selected";}?>>5- Terminé</option>
                </select>
            </div>
        </div>
       
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Forfait <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <select name="FORFAIT">
                    <option value=1<?php if($activite->FORFAIT == 1){echo "selected";}?>>Oui</option>
                    <option value=0<?php if($activite->FORFAIT == 0){echo "selected";}?>>Non</option>
                  
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Tarif forfait :</label>  
            <div class="col-md-4">
                <input id="TARIF_FORFAIT" name="TARIF_FORFAIT" placeholder="TARIF_FORFAIT" class="form-control input-md" type="text" value="<?= (isset($activite->TARIF_FORFAIT) ? $activite->TARIF_FORFAIT : '') ?>">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Tarif unitaire :</label>  
            <div class="col-md-4">
                <input id="TARIF_UNIT" name="TARIF_UNIT" placeholder="TARIF_UNIT" class="form-control input-md" type="text" value="<?= (isset($activite->TARIF_UNIT) ? $activite->TARIF_UNIT : '') ?>">

            </div>
        </div>

         <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Ouvert aux personnes extérieur <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <select name="OUVERT_EXT">
                    <option value="0"<?php if($activite->OUVERT_EXT == "0"){echo "selected";}?>>Oui</option>
                    <option value="1"<?php if($activite->OUVERT_EXT == "1"){echo "selected";}?>>Non</option>
                   

                </select>
               
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Prix Adulte :</label>  
            <div class="col-md-4">
                <input id="PRIX_ADULTE" name="PRIX_ADULTE" placeholder="PRIX_ADULTE" class="form-control input-md" type="text" value="<?= (isset($activite->PRIX_ADULTE) ? $activite->PRIX_ADULTE : '') ?>">

            </div>
        </div>
         <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Prix Enfant :</label>  
            <div class="col-md-4">
                <input id="PRIX_ENFANT" name="PRIX_ENFANT" placeholder="PRIX_ENFANT" class="form-control input-md" type="text" value="<?= (isset($activite->PRIX_ENFANT) ? $activite->PRIX_ENFANT : '') ?>">

            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Prix Adulte Exterieur :</label>  
            <div class="col-md-4">
                <input id="PRIX_ADULTE_EXT" name="PRIX_ADULTE_EXT" placeholder="PRIX_ADULTE_EXT" class="form-control input-md" type="text" value="<?= (isset($activite->PRIX_ADULTE_EXT) ? $activite->PRIX_ADULTE_EXT : '') ?>">

            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Prix Enfant Exterieur :</label>  
            <div class="col-md-4">
                <input id="PRIX_ENFANT_EXT" name="PRIX_ENFANT_EXT" placeholder="PRIX_ENFANT_EXT" class="form-control input-md" type="text" value="<?= (isset($activite->PRIX_ENFANT_EXT) ? $activite->PRIX_ENFANT_EXT : '') ?>">

            </div>
        </div>
        
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Coût Adulte :</label>  
            <div class="col-md-4">
                <input id="COUT_ADULTE" name="COUT_ADULTE" placeholder="COUT_ADULTE" class="form-control input-md" type="text" value="<?= (isset($activite->COUT_ADULTE) ? $activite->COUT_ADULTE : '') ?>">

            </div>
        </div>
        
           <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Coût Enfant :</label>  
            <div class="col-md-4">
                <input id="COUT_ENFANT" name="COUT_ENFANT" placeholder="COUT_ENFANT" class="form-control input-md" type="text" value="<?= (isset($activite->COUT_ENFANT) ? $activite->COUT_ENFANT : '') ?>">

            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Indication aux participant :</label>  
            <div class="col-md-4">
                <input id="INDICATION_PARTICIPANT" name="INDICATION_PARTICIPANT" placeholder="INDICATION_PARTICIPANT" class="form-control input-md" type="text" value="<?= (isset($activite->INDICATION_PARTICIPANT) ? $activite->INDICATION_PARTICIPANT : '') ?>">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Informations importante aux participant :</label>  
            <div class="col-md-4">
                <input id="INFO_IMPORTANT_PARTICIPANT" name="INFO_IMPORTANT_PARTICIPANT" placeholder="INFO_IMPORTANT_PARTICIPANT" class="form-control input-md" type="text" value="<?= (isset($activite->INFO_IMPORTANT_PARTICIPANT) ? $activite->INFO_IMPORTANT_PARTICIPANT : '') ?>">

            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-info">Modifier</button>
            </div>
        </div>
    </fieldset>
</form>
