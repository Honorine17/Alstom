<form class="form-horizontal" method="post" action="<?= BASE_URL ?>/activiteLeader/nouveau">

    <fieldset>

        <!-- Form Name -->
        <legend>Activité</legend>
        <!-- Text input-->
        Leader en charge de l'activité :
        <br>
        <br>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Nom :</label>  
            <div class="col-md-4">
                <input id="NOM_LEADER" name="NOM_LEADER" placeholder="Nom du Leader" class="form-control input-md" type="NOM_LEADER" value="<?= (isset($_SESSION['NOM']) ? $_SESSION['NOM'] : 'ERREUR') ?>"readonly>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Prénom :</label>  
            <div class="col-md-4">
                <input id="PRENOM_LEADER" name="PRENOM_LEADER" placeholder="Prénom du leader" class="form-control input-md" type="PRENOM_LEADER" value="<?= (isset($_SESSION['PRENOM']) ? $_SESSION['PRENOM'] : 'ERREUR') ?>" readonly>
            </div>
        </div>
        <hr>
        Détail de l'activité
        <br>
        <br>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Nom de l'activité <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <input id="NOM" name="NOM" placeholder="Nom de l'activité" class="form-control input-md" type="text" value="<?= (isset($activite->NOM) ? $activite->NOM : '') ?>">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Détail <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <textarea id="DETAIL" name="DETAIL" placeholder="Détail" class="form-control input-md" type="text" value="<?= (isset($activite->DETAIL) ? $activite->DETAIL : '') ?>"></textarea>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Date de l'activité <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <input id="DATE_ACTIVITE" name="DATE_ACTIVITE" placeholder="Date de l'activité" class="form-control input-md" type="date" value="<?= (isset($activite->DATE_ACTIVITE) ? $activite->DATE_ACTIVITE : '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Date de paiement <span class="important">*</span> :</label>  
                <div class="col-md-4">
                    <input id="DATE_PAIEMENT" name="DATE_PAIEMENT" placeholder="Date de paiement" class="form-control input-md" type="date" value="<?= (isset($activite->DATE_PAIEMENT) ? $activite->DATE_PAIEMENT : '') ?>">
                </div>
        </div>
        <!--        <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">Date de création</label>  
                    <div class="col-md-4">
                        <input id="DATE_CREATION" name="DATE_CREATION" placeholder="Date de création" class="form-control input-md" type="date" value="<?= (isset($activite->DATE_CREATION) ? $activite->DATE_CREATION : '') ?>">
                    </div>
                </div>-->
        <!--        <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">Date de paiement</label>  
                    <div class="col-md-4">
                        <input id="DATE_PAIEMENT" name="DATE_PAIEMENT" placeholder="Date de paiement" class="form-control input-md" type="date" value="<?= (isset($activite->DATE_PAIEMENT) ? $activite->DATE_PAIEMENT : '') ?>">
        
                    </div>
                </div>-->

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
            <label class="col-md-2 control-label" for="textinput">Indications aux participant :</label>  
            <div class="col-md-4">
                <textarea id="INDICATION_PARTICIPANT" name="INDICATION_PARTICIPANT" placeholder="INDICATION_PARTICIPANT" class="form-control input-md" type="text" value="<?= (isset($activite->INDICATION_PARTICIPANT) ? $activite->INDICATION_PARTICIPANT : '') ?>"></textarea>

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Informations importantes aux participant :</label>  
            <div class="col-md-4">
                <textarea id="INFO_IMPORTANT_PARTICIPANT" name="INFO_IMPORTANT_PARTICIPANT" placeholder="INFO_IMPORTANT_PARTICIPANT" class="form-control input-md" type="text" value="<?= (isset($activite->INFO_IMPORTANT_PARTICIPANT) ? $activite->INFO_IMPORTANT_PARTICIPANT : '') ?>"></textarea>
            </div>
        </div>


        <hr>
        Le prestataire :

        <br>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Choix du prestataire :</label>  
            <div class="col-md-4">
                <select name="CHOIX_PRESTATAIRE">
                    <option value=1>...</option>
                    <option value=0>...</option>

                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Type Tarif <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <select name="TYPE_FORFAIT">
                    <option value=1>Forfait</option>
                    <option value=0>Unitaire</option>

                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Tarif <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <input id="TARIF" name="TARIF" placeholder="TARIF" class="form-control input-md" type="text" value="<?= (isset($activite->TARIF) ? $activite->TARIF : '') ?>">
            </div>
        </div>


        <!--        <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">Prix Adulte</label>  
                    <div class="col-md-4">
                        <input id="PRIX_ADULTE" name="PRIX_ADULTE" placeholder="PRIX_ADULTE" class="form-control input-md" type="text" value="<?= (isset($activite->PRIX_ADULTE) ? $activite->PRIX_ADULTE : '') ?>">
        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">Prix Enfant</label>  
                    <div class="col-md-4">
                        <input id="PRIX_ENFANT" name="PRIX_ENFANT" placeholder="PRIX_ENFANT" class="form-control input-md" type="text" value="<?= (isset($activite->PRIX_ENFANT) ? $activite->PRIX_ENFANT : '') ?>">
        
                    </div>
                </div>
        
                <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">Prix Adulte Exterieur</label>  
                    <div class="col-md-4">
                        <input id="PRIX_ADULTE_EXT" name="PRIX_ADULTE_EXT" placeholder="PRIX_ADULTE_EXT" class="form-control input-md" type="text" value="<?= (isset($activite->PRIX_ADULTE_EXT) ? $activite->PRIX_ADULTE_EXT : '') ?>">
        
                    </div>
                </div>
        
                <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">Prix Enfant Exterieur</label>  
                    <div class="col-md-4">
                        <input id="PRIX_ENFANT_EXT" name="PRIX_ENFANT_EXT" placeholder="PRIX_ENFANT_EXT" class="form-control input-md" type="text" value="<?= (isset($activite->PRIX_ENFANT_EXT) ? $activite->PRIX_ENFANT_EXT : '') ?>">
        
                    </div>
                </div>-->

        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Prix Adulte <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <input id="PRIX_ADULTE" name="PRIX_ADULTE" placeholder="PRIX_ADULTE" class="form-control input-md" type="text" value="<?= (isset($activite->PRIX_ADULTE) ? $activite->PRIX_ADULTE : '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Prix Adulte Exterieur :</label>  
            <div class="col-md-4">
                <input id="PRIX_ADULTE_EXT" name="PRIX_ADULTE_EXT" placeholder="PRIX_ADULTE_EXT" class="form-control input-md" type="text" value="<?= (isset($activite->PRIX_ADULTE_EXT) ? $activite->PRIX_ADULTE_EXT : '') ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Ouvert enfants <span class="important">*</span> :</label>  
            <div class="col-md-10">
                <div class="col-md-3" >
                    <input id="OUVERT_ENFANT_NON" name="OUVERT_ENFANT" type="radio" value="0" checked>
                    <label for="OUVERT_ENFANT" >Non</label>
                </div>
                <div class="col-md-9 bg-info">
                    <input id="OUVERT_ENFANT" name="OUVERT_ENFANT" type="radio" value="1">
                    <label for="OUVERT_ENFANT">Oui</label>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Age minimium :</label>  
                        <div class="col-md-4">
                            <input id="AGE_MINIMUM" name="AGE_MINIMUM" placeholder="AGE_MINIMUM" class="form-control input-md" type="number" value="<?= (isset($activite->AGE_MINIMUM) ? $activite->AGE_MINIMUM : '') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Prix Enfant :</label>  
                        <div class="col-md-4">
                            <input id="PRIX_ENFANT" name="PRIX_ENFANT" placeholder="PRIX_ENFANT" class="form-control input-md" type="number" value="<?= (isset($activite->PRIX_ENFANT) ? $activite->PRIX_ENFANT : '') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Prix Enfant Exterieur :</label>  
                        <div class="col-md-4">
                            <input id="PRIX_ENFANT_EXT" name="PRIX_ENFANT_EXT" placeholder="PRIX_ENFANT_EXT" class="form-control input-md" type="number" value="<?= (isset($activite->PRIX_ENFANT_EXT) ? $activite->PRIX_ENFANT_EXT : '') ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Ouvert aux personnes extérieur <span class="important">*</span> :</label>  
            <div class="col-md-4">
                <select name="OUVERT_EXT">
                    <option value="1">Non</option>
                    <option value="0">Oui</option>
                </select>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-2 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-info">Créer</button>
            </div>
        </div>
    </fieldset>
</form>
