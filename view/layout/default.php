<!DOCTYPE html>

<!--test sur les téléphones portables -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo isset($title_for_layout) ? $title_for_layout : 'Amicale des cadres ALSTOM'; ?></title>
        <link href='<?php echo BASE_SITE . DS . '/css/bootstrap/css/bootstrap.css' ?>' rel="stylesheet">
        <link href='<?php echo BASE_SITE . DS . '/css/style.css' ?>' rel="stylesheet">

        <style type="text/css">
            /* Style pour l'exemple*/

        </style>
    </head>
    <body class="container">


        <header  >
            <div class="row hidden-xs" id="header_img"></div>
            <h1 class="row"> Amicale des cadres ALSTOM </h1>
        </header>
	
        <ul class="nav navbar-nav">
            <li class="active" ><a href="<?= BASE_URL ?>/accueil/detail"> Accueil </a> </li>
            <?php
            if (null !== Session::get('STATUT_TMP')) {
                // En tant qu'Adhérent
                if (Session::get('STATUT_TMP') == 'Adherent') {
                    echo '<li><a href="' . BASE_URL . '/activite/listerActivite"> Activités à venir </a> </li>';
                    echo '<li><a href="' . BASE_URL . '/activite/listerActiviteInscrit"> Mes activités </a> </li>';
                    echo '<li><a href="' . BASE_URL . '/adherent/consultercompte"> Mon compte </a> </li>';
                    echo '<li><a href="' . BASE_URL . '/invite/creer"> Créer un invité </a> </li>';


                }
                
                 // En tant que Leader
                elseif (Session::get('STATUT_TMP') == 'Leader' && (Session::get('GRADE') == 'L' || Session::get('GRADE') == 'A')) {
                    echo '<li><a class="dropdown-item d-sm-block d-md-none" href="'. BASE_URL .'/activiteLeader/creer">Créer activité</a></br>'
                    . '<li><a class="dropdown-item d-sm-block d-md-none" href="'. BASE_URL .'/activiteLeader/liste">Mes activités créées</a></br>';

                    
                
                // En tant qu'Administrateur
                } elseif (Session::get('STATUT_TMP') == 'Administrateur') {
                    echo '<li><a class="dropdown-item" href="'. BASE_URL .'/activiteAdmin/liste">Afficher les activités</a></li>'
                    . '<li><a class="dropdown-item d-sm-block d-md-none" href="'. BASE_URL .'/adherent/liste">Lister adherent</a></br>'
                    . '<li><a class="dropdown-item d-sm-block d-md-none" href="'. BASE_URL .'/adherent/creer">Créer adherent</a></br>'
                    . '<li><a class="dropdown-item d-sm-block d-md-none" href="'. BASE_URL .'/prestataire/creer">Créer prestataire</a></br>'
                    . '<li><a class="dropdown-item d-sm-block d-md-none" href="'. BASE_URL .'/prestataire/liste">Liste des prestataires</a></br>';
                }
            }
            ?>

          <!--  <li ><a href="<?= BASE_URL ?>/contact"> Contact</a> </li> --> 
            <?php
            if (null !== Session::get('ID_ADHERENT')) {
                if (null !== Session::get('STATUT_TMP')) {
                    echo '<li><td><button id = "singlebutton" name = "singlebutton" class = "btn btn-info" onclick="window.location.href=\'../connexion/accueil\'">' . Session::get('STATUT_TMP') . '</button></td></il>';                    
                }
                echo '<li ><a href="' . BASE_URL . '/connexion/deconnexion" class="pull-righ"> Déconnexion </a> </li>';
            } else {
                echo '<li ><a href="' . BASE_URL . '/connexion/connexion"> Connexion </a> </li>';
            }
            ?>

        </ul>
        <br>
    </div>

    <section class="col-lg-10">
        <?= $content_for_layout ?>
    </section>
</div> 

<script src='<?php echo BASE_SITE . '/js/jquery.js' ?>' ></script>
<script src='<?php echo BASE_SITE . '/js/jquery.dataTables.min.js' ?>' ></script>
<script src='<?php echo BASE_SITE . '/css/bootstrap/js/bootstrap.min.js' ?>' ></script>
<script src='<?php echo BASE_SITE . '/css/bootstrap/js/dataTables.bootstrap.min.js' ?>' ></script>
<script type="text/javascript">
    $(function () {
        $('#liste_espece').dataTable();
    });
</script>

</body>
</html>
