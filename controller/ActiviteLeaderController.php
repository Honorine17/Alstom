<?php

class ActiviteLeaderController extends Controller {

    function creer() {
        $modActivite = $this->loadModel('ActiviteLeader');
        $d['activite'] = $modActivite->find(array('conditions' => 1));
        $d['action'] = "creer";
        $this->set($d);
    }

    //méthode créer
    function nouveau($id) {
        $modActivite = $this->loadModel('ActiviteLeader');
//recup les données du formulaire
        $donnees = array();
        $donnees["ID_DOMAINE"] = 1;
        $donnees["ID_LEADER"] = $_SESSION['ID_ADHERENT'];
        $donnees["ID_PRESTATAIRE"] = 0;
        $donnees["NOM"] = $_POST["NOM"];
        $donnees["DETAIL"] = $_POST["DETAIL"];
        $donnees["DATE_CREATION"] = date("Y-m-d");
        $donnees["DATE_ACTIVITE"] = $_POST["DATE_ACTIVITE"];
        $donnees["DATE_PAIEMENT"] = $_POST["DATE_PAIEMENT"];
        $donnees["ADRESSE"] = $_POST["ADRESSE"];
        $donnees["VILLE"] = $_POST["VILLE"];
        $donnees["CP"] = $_POST["CP"];
        $donnees["INDICATION_PARTICIPANT"] = $_POST["INDICATION_PARTICIPANT"];
        $donnees["INFO_IMPORTANT_PARTICIPANT"] = $_POST["INFO_IMPORTANT_PARTICIPANT"];
        $donnees["FORFAIT"] = $_POST["TYPE_FORFAIT"];
        if ($_POST["TYPE_FORFAIT"] == 1) {
            $donnees["TARIF_FORFAIT"] = $_POST["TARIF"];
            $donnees["TARIF_UNIT"] = 0;
        } else {
            $donnees["TARIF_FORFAIT"] = 0;
            $donnees["TARIF_UNIT"] = $_POST["TARIF"];
        }
        $donnees["PRIX_ADULTE"] = $_POST["PRIX_ADULTE"];
        $donnees["PRIX_ADULTE_EXT"] = $_POST["PRIX_ADULTE_EXT"];
        if ($_POST["OUVERT_ENFANT"] == 0) {
            $donnees["AGE_MINIMUM"] = 0;
            $donnees["PRIX_ENFANT"] = 0;
            $donnees["PRIX_ENFANT_EXT"] = 0;
        } elseif ($_POST["OUVERT_ENFANT"] == 1) {
            $donnees["AGE_MINIMUM"] = $_POST["AGE_MINIMUM"];
            $donnees["PRIX_ENFANT"] = $_POST["PRIX_ENFANT"];
            $donnees["PRIX_ENFANT_EXT"] = $_POST["PRIX_ENFANT_EXT"];
        }
        $donnees["OUVERT_EXT"] = $_POST["OUVERT_EXT"];
        $donnees["STATUT"] = 'A';
        $donnees["COUT_ADULTE"] = 0;
        $donnees["COUT_ENFANT"] = 0;
        $colonnes = array('ID_DOMAINE', 'ID_LEADER', 'ID_PRESTATAIRE', 'NOM', 'DETAIL', 'DATE_CREATION', 'DATE_ACTIVITE', 'DATE_PAIEMENT', 'ADRESSE', 'VILLE', 'CP', 'INDICATION_PARTICIPANT', 'INFO_IMPORTANT_PARTICIPANT', 'FORFAIT', 'TARIF_FORFAIT', 'TARIF_UNIT', 'PRIX_ADULTE', 'PRIX_ADULTE_EXT', 'AGE_MINIMUM', 'PRIX_ENFANT', 'PRIX_ENFANT_EXT', 'OUVERT_EXT', 'STATUT', 'COUT_ADULTE', 'COUT_ENFANT');
//appeler la méthode insertAI

        $ID_ACTIVITE = $modActivite->insertAI($colonnes, $donnees);
//si le code tournoi est numerique c'est ok
        if (is_numeric($ID_ACTIVITE)) {
            $d['info'] = "La création de l'activité " . $donnees["NOM"] . " a été effectuée";
            $d['activite'] = $modActivite->findFirst(array('conditions' => array('ID_ACTIVITE' => $ID_ACTIVITE)));
            $modActivite = $this->loadModel('ActiviteLeader');
            $modCreneau = $this->loadModel('ActiviteCreneauAdmin');
            $d['activite'] = $modActivite->find(array('conditions' => 1));
            $d['creneau'] = $modCreneau->find(array('conditions' => 1));
        } else {
            $d['info'] = "Problème pour créer l'activité";
        }
//dans tous les cas
//charger le tableau
        $this->set($d);
        $this->render('liste');
    }

    function modifier($id) {
        $ID_ACTIVITE = $id;
        $modActivite = $this->loadModel('ActiviteLeader');
        //recup les données du form
        $donnees = array();
        $donnees["ID_DOMAINE"] = 1;
        $donnees["ID_LEADER"] = $_SESSION['ID_ADHERENT'];
        $donnees["ID_PRESTATAIRE"] = 0;
        $donnees["NOM"] = $_POST["NOM"];
        $donnees["DETAIL"] = $_POST["DETAIL"];
        $donnees["DATE_CREATION"] = $_POST["DATE_CREATION"];
        $donnees["DATE_PAIEMENT"] = $_POST["DATE_PAIEMENT"];
        $donnees["ADRESSE"] = $_POST["ADRESSE"];
        $donnees["CP"] = $_POST["CP"];
        $donnees["VILLE"] = $_POST["VILLE"];
        $donnees["AGE_MINIMUM"] = $_POST["AGE_MINIMUM"];
        $donnees["FORFAIT"] = $_POST["FORFAIT"];
        $donnees["TARIF_FORFAIT"] = $_POST["TARIF_FORFAIT"];
        $donnees["TARIF_UNIT"] = $_POST["TARIF_UNIT"];
        $donnees["OUVERT_EXT"] = $_POST["OUVERT_EXT"];
        $donnees["PRIX_ADULTE"] = $_POST["PRIX_ADULTE"];
        $donnees["PRIX_ENFANT"] = $_POST["PRIX_ENFANT"];
        $donnees["PRIX_ADULTE_EXT"] = $_POST["PRIX_ADULTE_EXT"];
        $donnees["PRIX_ENFANT_EXT"] = $_POST["PRIX_ENFANT_EXT"];
        $donnees["COUT_ADULTE"] = $_POST["COUT_ADULTE"];
        $donnees["COUT_ENFANT"] = $_POST["COUT_ENFANT"];
        $donnees["STATUT"] = $_POST["STATUT"];
        $donnees["INDICATION_PARTICIPANT"] = $_POST["INDICATION_PARTICIPANT"];
        $donnees["INFO_IMPORTANT_PARTICIPANT"] = $_POST["INFO_IMPORTANT_PARTICIPANT"];
        $tab = array('conditions' => array('ID_ACTIVITE' => $ID_ACTIVITE), 'donnees' => $donnees);
//appeler la methode update
        $modActivite->update($tab);
        $d['info'] = "Activité modifié";
//charger le tableau 
        $d['activite'] = $modActivite->findFirst(array('conditions' => array('ID_ACTIVITE' => $ID_ACTIVITE)));
        $modActivite = $this->loadModel('ActiviteLeader');
        $d['activite'] = $modActivite->find(array('conditions' => 1));
        $this->set($d);
        $this->render('liste');
    }

//    public function liste() {
//        $modActiviteLeader = $this->loadModel('ActiviteLeader'); //instancier le modele 
//        $d['activiteleader'] = $modActiviteLeader->find(array('conditions' => 1));
//        $this->set($d);
//    }
    public function liste() {
        $modActiviteLeader = $this->loadModel('ActiviteLeader'); //instancier le modele 
        $modCreneau = $this->loadModel('ActiviteCreneauAdmin');

        $projection['projection'] = "ID_LEADER,ID_ACTIVITE,NOM,DETAIL,ADRESSE,DATE_ACTIVITE,CP,VILLE,INDICATION_PARTICIPANT,INFO_IMPORTANT_PARTICIPANT,AGE_MINIMUM,FORFAIT,TARIF_FORFAIT,TARIF_UNIT,OUVERT_EXT,COUT_ADULTE,COUT_ENFANT,STATUT";
        $projection['conditions'] = "ID_LEADER = " . $_SESSION['ID_ADHERENT'];
        $projection['orderby'] ='DATE_ACTIVITE';
        $d['activite'] = $modActiviteLeader->find($projection);
        $d['creneau'] = $modCreneau->find(array('conditions' => 1));


        //passer les informations à la vue qui s'appellera liste.php
        $this->set($d);
//methode pour afficher le formulaire de création du tournois



        /* function supprimer($id){

          $modActivite=$this->loadModel('ActiviteLeader');
          //recup les données du formulaire
          if (isset($_POST['ids'])) {
          $ids = $_POST['ids'];
          foreach ($ids as $id) {
          $tab=array('conditions'=> 'ID_ACTIVITE = '.$id);
          $modActivite->delete($tab);

          }
          try {
          $modActivite->delete($tab);
          } catch (PDOException $e) {
          $info = $info . "<br>Erreur";

          }
          }
          $this-> liste();
          $this->render('liste');
          }
         * 
         */
    }

    function formulaireCreneau($id) {
        $modActivite = $this->loadModel('ActiviteAdmin');
        $modCreneau = $this->loadModel('ActiviteCreneauAdmin');
        if (strpos($id, '_') !== FALSE) {
            $ids = explode("_", $id);
            // NUM_ACTIVITE : $ids[1]
            $ID_ACTIVITE = $ids[0];
            $NUM_CRENEAU = $ids[1];
            $d['creneauP'] = $modCreneau->find(array('conditions' => array('CRENEAU.NUM_CRENEAU' => $NUM_CRENEAU, 'CRENEAU.ID_ACTIVITE' => $ID_ACTIVITE)));
        } else {
            $ID_ACTIVITE = $id;
        }
        $d['activite'] = $modActivite->findFirst(array('conditions' => array('ACTIVITE.ID_ACTIVITE' => $ID_ACTIVITE)));
        $d['creneauG'] = $modCreneau->find(array('conditions' => array('CRENEAU.ID_ACTIVITE' => $ID_ACTIVITE)));
        $this->set($d);
    }

    function creerCreneau($id) {
        $ID_ACTIVITE = $id;

        //$modActivite = $this->loadModel('ActiviteAdmin');
        $donnees["ID_ACTIVITE"] = $ID_ACTIVITE;
        $donnees["DATE_CRENEAU"] = $_POST['DATE_CRENEAU'];
        $donnees["HEURE_CRENEAU"] = $_POST['HEURE_CRENEAU'];
        $donnees["EFFECTIF_CRENEAU"] = $_POST["EFFECTIF_CRENEAU"];
        $donnees["STATUT"] = 'A';

        // Récupération du nombre de créneau pour une activité
        $modActivite = $this->loadModel('ActiviteAdmin');
        $modCreneau = $this->loadModel('ActiviteCreneauAdmin');
        $proj['activite'] = $modActivite->findFirst(array('conditions' => array('ACTIVITE.ID_ACTIVITE' => $ID_ACTIVITE)));
        $proj['creneau'] = $modCreneau->find(array('conditions' => array('CRENEAU.ID_ACTIVITE' => $ID_ACTIVITE)));
        $nbCreneau = 0;
        foreach ($proj['creneau'] as $c) {
            $nbCreneau = $nbCreneau + 1;
        }
        $donnees["NUM_CRENEAU"] = $nbCreneau + 1;

        $colonnes = array('ID_ACTIVITE', 'DATE_CRENEAU', 'HEURE_CRENEAU', 'EFFECTIF_CRENEAU', 'STATUT', 'NUM_CRENEAU');
        //appeler la méthode insert
        $modCreneau->insert($colonnes, $donnees);

        $this->liste();
        //$this->redirect('liste');
        header('Location: ../liste');
    }

    function modifierCreneau($id) {
        $modCreneau = $this->loadModel('ActiviteCreneauAdmin');

        $ids = explode("_", $id);
        $ID_ACTIVITE = $ids[0];
        $NUM_CRENEAU = $ids[1];

        //$modActivite = $this->loadModel('ActiviteAdmin');
        $donnees["ID_ACTIVITE"] = $ID_ACTIVITE;
        $donnees["DATE_CRENEAU"] = $_POST['DATE_CRENEAU'];
        $donnees["HEURE_CRENEAU"] = $_POST['HEURE_CRENEAU'];
        $donnees["EFFECTIF_CRENEAU"] = $_POST["EFFECTIF_CRENEAU"];
        $donnees["STATUT"] = 'A';
        $colonnes = array('ID_ACTIVITE', 'DATE_CRENEAU', 'HEURE_CRENEAU', 'EFFECTIF_CRENEAU', 'STATUT', 'NUM_CRENEAU');
        $tab = array('conditions' => array('ID_ACTIVITE' => $ID_ACTIVITE, 'NUM_CRENEAU' => $NUM_CRENEAU), 'donnees' => $donnees);
        //appeler la methode update
        $modCreneau->update($tab);
        $this->liste();
        header('Location: ../liste');
    }

    function supprimerCreneau($id) {
        if ($id != FALSE) {
            $modCreneau = $this->loadModel('ActiviteCreneauAdmin');
            $ids = explode("_", $id);
            $ID_ACTIVITE = $ids[0];
            $NUM_CRENEAU = $ids[1];
            //$modActivite = $this->loadModel('ActiviteAdmin');
            $tab = array('conditions' => array('ID_ACTIVITE' => $ID_ACTIVITE, 'NUM_CRENEAU' => $NUM_CRENEAU));
            //appeler la methode delete
            $modCreneau->delete($tab);
        }
        $this->liste();
        header('Location: ../liste');
    }

}
