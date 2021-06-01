<legend>Amical des cadres ALSTOM</legend>
<form class="form-horizontal" >
<fieldset>
<section class="table_responsive">
<table class="mx-auto" style="border-spacing : 20px;border-collapse : separate;">
     
  <legend>Mon compte</legend>

                    <tr class="">
                        <td class="text-right "><strong>Mail :</strong></td>
                        <td class="pl-3">  <?= $_SESSION['MAIL'] ?></td>
                    </tr>
                    <!-- statut -->
                    <tr>
                        <td class="text-right"><strong>Mot de passe :</strong> </td>
                        <td class="pl-3"><?= $_SESSION['PASSWORD'] ?></td>
                    </tr>
                    <!-- Email -->
                    <tr>
                        <td class="text-right"><strong>Nom :</strong> </td>
                        <td class="pl-3"><?= $_SESSION['NOM'] ?></td>

                    </tr>
                    <!-- Nom -->
                    <tr>
                        <td class="text-right"><strong>Prénom :</strong> </td>
                        <td class="pl-3"><?= $_SESSION['PRENOM'] ?></td>

                    </tr>
                    <!-- Prenom -->
                    <tr>
                        <td class="text-right"><strong>Genre :</strong></td>
                        <td class="pl-3"> 
                        <?php if ($_SESSION['GENRE']=='F'){
                             echo 'Femme';
                        }elseif ($_SESSION['GENRE']=='H'){
                            echo 'Homme';
                        }else{
                            echo 'Autre';
                        } ?></td>
                    </tr>
                    <!-- Telephone -->
                    <tr>
                        <td class="text-right"><strong>Matricule : </td>
                        <td class="pl-3"><?= $_SESSION['MATRICULE'] ?></td>
                    </tr>
                    <!--- Adresse Mail -->
<!--                    <tr>
                        <td class="text-right"><strong>Adresse Mail : </td>
                        <td class="pl-3"><?= $_SESSION['ADRESSE_MAIL'] ?></td>
                    </tr>-->
                    <!-- Téléphone -->
                    <tr>
                        <td class="text-right"><strong>Téléphone : </td>
                        <td class="pl-3"><?= $_SESSION['TELEPHONE'] ?></td>
                    </tr>
                    <!-- Date Adhésion -->
                    <tr>
                        <td class="text-right"><strong>Date Adhésion : </td>
                        <td class="pl-3"><?= $_SESSION['DATE_ADHESION'] ?></td>
                    </tr>
                </table>