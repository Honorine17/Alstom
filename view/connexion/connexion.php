<div class="alert-danger" name="info"><?= (isset($info) ? $info : '') ?></div>
<br>
<form class="form-horizontal" method="post" action="<?= BASE_URL ?>/connexion/authentification">
    <fieldset>
        <!-- Form Name -->
        <legend>Se connecter</legend>
        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Adresse Mail</label>  
            <div class="col-md-4">
                <input id="MAIL" name="MAIL" placeholder="mail" class="form-control input-md" type="text" value="<?= (isset($adherent->MAIL) ? $adherent->MAIL : '') ?>">

            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="textinput">Mot de Passe</label>  
            <div class="col-md-4">
                <input id="PASSWORD" name="PASSWORD" placeholder="Mot de passe" class="form-control input-md" type="password" value="<?= (isset($adherent->PASSWORD) ? $adherent->PASSWORD : '') ?>">

            </div>
        </div>
        <!-- Button -->
        <input class="btn-primary btn-lg" type="submit" name="submit" value="Se connecter">
    </fieldset>
</form>
