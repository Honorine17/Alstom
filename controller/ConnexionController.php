<?php

class ConnexionController extends Controller {

    public function connexion() {
        $modConnexion = $this->loadModel('Connexion');
        $this->render('connexion');
    }

    public function authentification() {
        if (isset($_POST["MAIL"]) && (isset($_POST["PASSWORD"]))) {
            $modConnexion = $this->loadModel('Connexion');
            $condition = "MAIL ='" . $_POST["MAIL"] . "' AND PASSWORD ='" . $_POST["PASSWORD"] . "'";
            $params = array('conditions' => $condition);
            try {
                if ($modConnexion->findfirst($params) != '') {
                    $d['connexion'] = $modConnexion->findfirst($params);
                    Session::set('ID_ADHERENT', $d['connexion']->ID_ADHERENT);
                    Session::set('MAIL', $d['connexion']->MAIL);
                    Session::set('PASSWORD', $d['connexion']->PASSWORD);
                    Session::set('GRADE', $d['connexion']->GRADE);
                    Session::set('NOM', $d['connexion']->NOM);
                    Session::set('PRENOM', $d['connexion']->PRENOM);
                    Session::set('GENRE', $d['connexion']->GENRE);
                    Session::set('MATRICULE', $d['connexion']->MATRICULE);
                    Session::set('TELEPHONE', $d['connexion']->TELEPHONE);
                    Session::set('MEMBRE_ACTIF', $d['connexion']->MEMBRE_ACTIF);
                    Session::set('DATE_ADHESION', $d['connexion']->DATE_ADHESION);
                    Session::set('DATE_DEPART', $d['connexion']->DATE_DEPART);
                    $this->render('accueil');
                } else {
                    $d['info'] = "erreur d'authentification";
                    $this->set($d);
                    $this->render('connexion');
                }
            } catch (PDOException $e) {
                
            }
        } else {
            $this->connexion();
        }
    }

    function accueil() {
        if (empty(Session::get('GRADE'))) {
            $this->connexion();
        }
    }
    function deconnexion() {
        session_destroy();
        header('Location: connexion/connexion');
        $this->render('connexion');
    }


}

?>
