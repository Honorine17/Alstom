<?php

class InviteController extends Controller {
    public function creer() {
        $modInvite = $this->loadModel('Invite');
        $d['invite'] = $modInvite->find(array('conditions' => 1));
        $d['action']="nouveauInvite";    
        $this->set($d);
        $this->render('creer');
    }
     public function nouveauInvite() {
        $modInvite = $this->loadModel('Invite');
        $donnees = array();
        $donnees["ID_ADHERENT"] = $_SESSION["ID_ADHERENT"];
        $donnees["NOM"] = $_POST["NOM"];
        $donnees["PRENOM"] = $_POST["PRENOM"];
        $donnees["DATE_NAISSANCE"] = $_POST["DATE_NAISSANCE"];
        $colonne = array('ID_ADHERENT', 'NOM', 'PRENOM','DATE_NAISSANCE');
        $ID_PERS_EXTERIEUR = $modInvite->insertAI($colonne, $donnees);
        if (is_numeric($ID_PERS_EXTERIEUR)) {
            $d['info'] = "Invité créer";
            $d['invite'] = $modInvite->findFirst(array('conditions' => array('ID_PERS_EXTERIEUR' => $ID_PERS_EXTERIEUR)));
            $modInvite = $this->loadModel('Invite');
            $d['invite'] = $modInvite->find(array('conditions' => 1));
        } else {
            $d['info'] = "Erreur de traitement";
        }
        $this->set($d);
        $this->render('../accueil/detail');
    }
    
    
    
    
}
