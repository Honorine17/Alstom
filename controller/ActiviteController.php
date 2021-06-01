<?php

class ActiviteController extends Controller {

    // Lister les activités ouvertes aux adhérents
    public function listerActivite() {
        $modActivite = $this->loadModel('ListeActiviteOuverte'); //instancier le modele 
        $projection = "ID_ACTIVITE,NOM,DETAIL,VILLE,DATE_ACTIVITE";
        $orderby = "DATE_ACTIVITE";
        //$condition = 'STATUT = "O"';
        $params = array('projection' => $projection , 'orderby' => $orderby,);//, 'conditions' => $condition);
        $d['activites'] = $modActivite->find($params);
        //fait un select * from jeux et met les donnés sous forme de tableau d'objet dans $d['tournois']
        //passer les informations à la vue qui s'appellera liste.php
        $this->set($d);
    }

    function consulter($id) {
        $ID_ACTIVITE = $id;
        $modActivite = $this->loadModel('ListeActiviteOuverte');
        $projection ['projection'] = "ACTIVITE.ID_ACTIVITE, ACTIVITE.NOM, ACTIVITE.DETAIL, ACTIVITE.DATE_PAIEMENT, ACTIVITE.ADRESSE, ACTIVITE.CP, ACTIVITE.VILLE, ACTIVITE.AGE_MINIMUM,ACTIVITE.PRIX_ADULTE,ACTIVITE.PRIX_ENFANT,ACTIVITE.PRIX_ADULTE_EXT,ACTIVITE.PRIX_ENFANT_EXT, ACTIVITE.INDICATION_PARTICIPANT, ACTIVITE.INFO_IMPORTANT_PARTICIPANT";
        $projection['conditions'] = "ID_ACTIVITE = " . $ID_ACTIVITE;
        $d['donnees'] = $modActivite->findfirst($projection);
        $this->set($d);
    }

    public function formulaireInscription($id) {
        $ID_ACTIVITE = $id;
        $modActivite = $this->loadModel('ListeActiviteOuverte');
        $projection['conditions'] = "ID_ACTIVITE = " . $ID_ACTIVITE;
        $d['donnees'] = $modActivite->findfirst($projection);
        $this->set($d);
    }

    public function inscriptionActivite() {
        $donnees = array();
        $donnees['ID_ACTIVITE'] = $_POST['ID_ACTIVITE'];
        $donnees['ID_ADHERENT'] = $_SESSION['ID_ADHERENT'];
        $donnees['CRENEAU'] = 0; //$_POST['CRENEAU'];
        $donnees['DATE_INSCRIPTION'] = date('Y-m-d');
        $donnees['DATE_PAIEMENT'] = $_POST['DATE_PAIEMENT'];
        $donnees['PRESENCE'] = $_POST['PRESENCE'];
        $donnees['MONTANT'] = $_POST['MONTANT'];
        $donnees['DATE_DESINSCRIPTION'] = date('Y-m-d');
        $donnees['NB_ENFANTS'] = $_POST['NB_ENFANTS'];
        $donnees['NB_EXT'] = $_POST['NB_EXT'];
//        if ($_POST["NB_ENFANTS"] == 0) {
//            $donnees['NB_ENFANTS'] = 0;
//        } elseif ($_POST["NB_ENFANTS"] == 1) {
//            $donnees['NB_ENFANTS'] = $_POST['NB_ENFANTS'];
//        }
//        if ($_POST["NB_EXT"] == 0) {
//            $donnees['NB_EXT'] = 0;
//        } elseif ($_POST["NB_EXT"] == 1) {
//            $donnees['NB_EXT'] = $_POST['NB_EXT'];
//        }
        $colonnes = array('ID_ACTIVITE', 'ID_ADHERENT', 'CRENEAU', 'DATE_INSCRIPTION', 'DATE_PAIEMENT', 'PRESENCE', 'MONTANT', 'DATE_DESINSCRIPTION', 'NB_ENFANTS', 'NB_EXT');
//appeler la méthode insertAI
        $modInscription = $this->loadModel('Inscription');
        $ID = $modInscription->insertAI($colonnes, $donnees);
//si le code id est numerique c'est ok
        if (is_numeric($ID)) {
            $d['info'] = "L'inscription à l'activité a été effectuée";
            $d['inscription'] = $modInscription->findFirst(array('conditions' => array('ID' => $ID)));
            $modInscription = $this->loadModel('Inscription');
            $d['activite'] = $modInscription->find(array('conditions' => 1));
        } else {
            $d['info'] = "Problème pour s'inscrire à l'activité";
        }
//dans tous les cas
//charger le tableau
        $this->set($d);
        $this->listerActivite();
        $this->render('listerActivite');
    }


//    public function formulaireInscription($id) {
//        
//    }
//
//    public function inscriptionActivite($id) {
//        $ID_ACTIVITE = $id;
//        $ID_ADHERENT = $_SESSION['ID_ADHERENT'];
//        $DATE_INSCRIPTION = date("Y-m-d");
//        $CRENEAU = 0;
//        $DATE_PAIEMENT = date("Y-m-d");
//        $NB_ENFANTS = 0;
//        $NB_EXT = 0;
//        $MONTANT = 100;
//        $DATE_DESINSCRIPTION = date("Y-m-d");
//        $modInscription = $this->loadModel('Inscription');
//        $donnees = array($ID_ACTIVITE, $ID_ADHERENT, $DATE_INSCRIPTION, $CRENEAU, $DATE_PAIEMENT, $NB_ENFANTS, $NB_EXT, $MONTANT, $DATE_DESINSCRIPTION);
//        $colonne = array('ID_ACTIVITE', 'ID_ADHERENT', 'DATE_INSCRIPTION', 'CRENEAU', 'DATE_PAIEMENT', 'NB_ENFANTS', 'NB_EXT', 'MONTANT', 'DATE_DESINSCRIPTION');
//        $ID_ACIVITE = $modInscription->insertAI($colonne, $donnees);
//    }
//put your code here
//    function detail($id) {
//        $ID = $id;
//        $modInscription = $this->loadModel('INSCRIPTION');
//        $i['inscription'] = $modInscription->findFirst(array('conditions' => array('ID' => $ID)));
//        $this->set($i);
//    }
//
//    function liste($id) {
//        $ID = trim($id);
//
//        $this->modIncription = $this->loadModel('INSCRIPTION');
//        $i['inscription'] = $this->modInscription->findFirst(array(
//            'conditions' => array('id' => $ID)
//        ));
//        if (empty($i['inscription'])) {
//            $this->e404('Clé invalide');
//        }
//        $this->set($i);
//    }
//
//
//}
      public function listerActiviteInscrit() {
        $modActiviteInscrit = $this->loadModel('ActiviteInscrit'); //instancier le modele 
        $projection['projetction'] = "ACTIVITE.ID_ACTIVITE,NOM,DETAIL,VILLE,NB_ENFANTS,DATE_ACTIVITE,NB_EXT,INDICATION_PARTICIPANT,MONTANT";
        $projection['conditions'] ='ID_ADHERENT = '.$_SESSION['ID_ADHERENT'];
        $projection['orderby'] ='DATE_ACTIVITE';
        $d['inscription'] = $modActiviteInscrit->find($projection);
       //  $projection ['projection'] = "ACTIVITE.ID_ACTIVITE,NOM,DETAIL,VILLE,NB_ENFANTS,NB_EXT,INDICATION_PARTICIPANT,MONTANT";
        // $projection['conditions'] = 'ID_ADHERENT = '.$_SESSION['ID_ADHERENT'];
       //  $params = array('projection' => $projection, 'condition' => $condition);
       //  $d['activites'] = $modActiviteInscrit->find($params);
        $this->set($d);
    }
    
    function mesActivites($id) {
        $ID_ACTIVITE = $id;
        $modActiviteInscrit = $this->loadModel('ActiviteInscrit');
        //$projection ['projection']="activite.ID_ACTIVITE, activite.NOM, activite.DETAIL, activite.ADRESSE, activite.CP, activite.VILLE, activite.AGE_MINIMUM,,activite.DATE_PAIEMENT, activite.INDICATION_PARTICIPANT, activite.INFO_IMPORTANT_PARTICIPANT";
        $projection ['projection'] = "ACTIVITE.ID_ACTIVITE, DATE_ACTIVITE, ACTIVITE.NOM, ACTIVITE.DETAIL, ACTIVITE.DATE_PAIEMENT, ACTIVITE.ADRESSE, ACTIVITE.CP, ACTIVITE.VILLE, ACTIVITE.AGE_MINIMUM,ACTIVITE.PRIX_ADULTE,ACTIVITE.PRIX_ENFANT,ACTIVITE.PRIX_ADULTE_EXT,ACTIVITE.PRIX_ENFANT_EXT, ACTIVITE.INDICATION_PARTICIPANT, ACTIVITE.INFO_IMPORTANT_PARTICIPANT";
        $projection['conditions']= "ACTIVITE.ID_ACTIVITE = ".$ID_ACTIVITE;
        $projection['orderby'] ='DATE_ACTIVITE';
        $d['donnees']=$modActiviteInscrit->findfirst($projection);
        $this->set($d);
        
    }

   
}

?>

