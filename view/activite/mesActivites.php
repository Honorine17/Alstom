<legend>Amical des cadres ALSTOM</legend>
<form class="form-horizontal" >
<fieldset>
<section class="table_responsive">
<table class="mx-auto" style="border-spacing : 20px;border-collapse : separate;">
     
  <legend>Consulter une activité</legend>

        <tr class="">
            <td class="text-right "><strong>Code de l'activité :</strong></td>
            <td disabled class="pl-3">  <?= (isset($donnees->ID_ACTIVITE) ? $donnees->ID_ACTIVITE : '') ?></td>
        </tr> 
        <!-- Nom de l'activité -->
        <tr>
            <td class="text-right"><strong>Nom de l'activité :</strong> </td>
            <td class="pl-3"><?= (isset($donnees->NOM) ? $donnees->NOM : '') ?></td>
       </tr>
        <!-- Detail de l'activité -->
        <tr>
            <td class="text-right"><strong>Detail de l'activité :</strong> </td>
            <td class="pl-3"><?= (isset($donnees->DETAIL) ? $donnees->DETAIL : '') ?></td>
       </tr>
       <!-- Date de l'activité -->
       <tr>
            <td class="text-right"><strong>Date de l'activité :</strong> </td>
            <td class="pl-3"><?= (isset($donnees->DATE_ACTIVITE) ? $donnees->DATE_ACTIVITE : '') ?></td>
       </tr>  
        <!-- Adresse de l'activité -->
        <tr>
            <td class="text-right"><strong>Adresse :</strong> </td>
            <td class="pl-3"><?= (isset($donnees->ADRESSE) ? $donnees->ADRESSE : '') ?></td>
       </tr>       
        <!-- Code postale -->
        <tr>
            <td class="text-right"><strong>Code Postale :</strong> </td>
            <td class="pl-3"><?= (isset($donnees->CP) ? $donnees->CP : '') ?></td>
        </tr>         
        <!--  Ville de l'activité -->
        <tr>
            <td class="text-right"><strong>Ville :</strong> </td>
            <td class="pl-3"><?= (isset($donnees->VILLE) ? $donnees->VILLE : '') ?></td>
        </tr>     
        <!-- Age Minimum -->
        <tr>
            <td class="text-right"><strong>Age Minimum :</strong> </td>
            <td class="pl-3"><?= (isset($donnees->AGE_MINIMUM) ? $donnees->AGE_MINIMUM . " ans" : '') ?></td>
        </tr>
        <!-- Date limite de paiement -->
        <tr>
            <td class="text-right"><strong>Date limite de paiement :</strong> </td>
            <td class="pl-3"><?= (isset($donnees->DATE_PAIEMENT) ? $donnees->DATE_PAIEMENT : '') ?></td>
        </tr>       
        <!-- Indications aux participants -->
        <tr>
            <td class="text-right"><strong>Indications aux participants :</strong> </td>
            <td class="pl-3"><?= (isset($donnees->INDICATION_PARTICIPANT) ? $donnees->INDICATION_PARTICIPANT : '') ?></td>
        </tr>        
        <!-- Info Importante aux participants -->
        <tr>
            <td class="text-right"><strong>Informations Importantes aux Participants :</strong> </td>
            <td class="pl-3"><?= (isset($donnees->INFO_IMPORTANT_PARTICIPANT) ? $donnees->INFO_IMPORTANT_PARTICIPANT : '') ?></td>
        </tr>
        <!-- Prix -->
        <tr>
            <td class="text-right"><strong>Prix :</strong> </td>
       </tr>
        </table>
        <table id="liste_tournoi" class="table table-bordered table-condensed table-striped">

        <div class="form-group">
        <td>Prix Adulte</td>
        <td>Prix Enfant</td>
        <td>Prix Adulte Extérieur</td>
        <td>Prix Enfant Extérieur</td>
            <tr>

                <td><?= $donnees->PRIX_ADULTE . " €" ?></td>
                <td><?= $donnees->PRIX_ENFANT . " €" ?></td>
                <td><?= $donnees->PRIX_ADULTE_EXT . " €" ?></td>
                <td><?= $donnees->PRIX_ENFANT_EXT . " €" ?></td>
                
            </tr>
                
        </div>    
       
    </fieldset>
</form>
<div class="alert-info" name="info"><?= (isset($info) ? $info : '') ?></div>
