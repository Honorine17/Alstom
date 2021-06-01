<form class="form-horizontal" method="post" action="<?=BASE_URL?>/invite/nouveauInvite">
    <fieldset>
            <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Nom <span class="important">*</span> : </label>  
            <div class="col-md-4">
                <input id="NOM" name="NOM" class="form-control input-md" type="text" value="" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Prenom <span class="important">*</span> : </label>  
            <div class="col-md-4">
                <input id="PRENOM" name="PRENOM" class="form-control input-md" type="text" value="" >
            </div>
        </div>
         <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Date de naissance</label>  
            <div class="col-md-4">
                <input id="DATE_NAISSANCE" name="DATE_NAISSANCE" placeholder="Date de naissance" class="form-control input-md" type="date" value="">

            </div>
        </div>
<!--       
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Telephone : </label>  
            <div class="col-md-4">
                <input id="TELEPHONE" name="TELEPHONE" class="form-control input-md" type="text" value="" >
            </div>
        </div>-->
        <div class="form-group">
            <label class="col-md-2 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-info">Créer</button>
            </div>
        </div>
    </fieldset>
</form>
