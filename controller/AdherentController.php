<?php

class AdherentController extends Controller {

    public function creer() {
        $modAdherent = $this->loadModel('Adherent');
        $d['adherent'] = $modAdherent->find(array('conditions' => 1));
        $this->set($d);
        $this->render('creer');
    }

    public function nouveauAdherent() {
        $modAdherent = $this->loadModel('Adherent');
        $donnees = array();
        $donnees["MAIL"] = $_POST["MAIL"];
        $donnees["PASSWORD"] = 'achanger';
        $donnees["NOM"] = $_POST["NOM"];
        $donnees["PRENOM"] = $_POST["PRENOM"];
        $donnees["GRADE"] = $_POST["GRADE"];
        $donnees["GENRE"] = $_POST["GENRE"];
        $donnees["MATRICULE"] = $_POST["MATRICULE"];
        $donnees["TELEPHONE"] = $_POST["TELEPHONE"];
        $donnees["MEMBRE_ACTIF"] = 1;
        $donnees["DATE_ADHESION"] = date("Y-m-d");
        $colonne = array('MAIL', 'PASSWORD', 'NOM', 'PRENOM', 'GRADE', 'GENRE', 'MATRICULE', 'TELEPHONE', 'MEMBRE_ACTIF', 'DATE_ADHESION');
        $ID_ADHERENT = $modAdherent->insertAI($colonne, $donnees);
        if (is_numeric($ID_ADHERENT)) {
            $d['info'] = "Adherent créer";
            $d['adherent'] = $modAdherent->findFirst(array('conditions' => array('ID_ADHERENT' => $ID_ADHERENT)));
            $modAdherent = $this->loadModel('Adherent');
            $d['adherent'] = $modAdherent->find(array('conditions' => 1));
        } else {
            $d['info'] = "Erreur de traitement";
        }
        $this->set($d);
        $this->render('liste');
    }

    public function liste() {
        $modAdherent = $this->loadModel('Adherent'); //instancier le modele 
        $d['adherent'] = $modAdherent->find(array('conditions' => 1, 'orderby' => "DATE_ADHESION"));
//fait un select * from tournois et met les donnés sous forme de tableau d'objet dans $d['tournois']
        //passer les informations à la vue qui s'appellera liste.php
        $this->set($d);
    }

    function detail($id) {
        $ID_ADHERENT = $id;
        $modAdherent = $this->loadModel('Adherent');
        $d['adherent'] = $modAdherent->findFirst(array('conditions' => array('ID_ADHERENT' => $ID_ADHERENT)));
        $this->set($d);
    }

    function modifier($id) {
        $ID_ADHERENT = $id;
        $modAdherent = $this->loadModel('Adherent');
        //recup les données du form
        $donnees = array();
        $donnees["MAIL"] = $_POST["MAIL"];
        $donnees["PASSWORD"] = $_POST["PASSWORD"];
        $donnees["GRADE"] = $_POST["GRADE"];
        $donnees["NOM"] = $_POST["NOM"];
        $donnees["PRENOM"] = $_POST["PRENOM"];
        $donnees["GENRE"] = $_POST["GENRE"];
        $donnees["MATRICULE"] = $_POST["MATRICULE"];
        $donnees["TELEPHONE"] = $_POST["TELEPHONE"];
        $donnees["MEMBRE_ACTIF"] = $_POST["MEMBRE_ACTIF"];
        $donnees["DATE_ADHESION"] = $_POST["DATE_ADHESION"];
        $tab = array('conditions' => array('ID_ADHERENT' => $ID_ADHERENT), 'donnees' => $donnees);
        //appeler la methode update
        $modAdherent->update($tab);
        $d['info'] = "Adhérent modifié";
        //charger le tableau 
        $d['adherent'] = $modAdherent->findFirst(array('conditions' => array('ID_ADHERENT' => $ID_ADHERENT)));
        $modAdherent = $this->loadModel('Adherent');
        $d['adherent'] = $modAdherent->find(array('conditions' => 1));
        $this->set($d);
        $this->render('liste');
    }

    function archiver() {
        $modAdherent = $this->loadModel('Adherent');
        if (isset($_POST['ids'])) {
            $ids = $_POST['ids'];
            $donnees = array();
            $donnees["DATE_DEPART"] = date("Y-m-d");
            $donnees["MEMBRE_ACTIF"] = 0;
            foreach ($ids as $id) {
                $tab = array('conditions' => "ID_ADHERENT = " . $id,'donnees' => $donnees);
                try {
                    $modAdherent->update($tab);
                } catch (Exception $ex) {
                    $e->getCode() == 42000;
                }
            }
            $this->liste();
            $this->render('liste');
        }
    }
        
    function consultercompte($id) {
        
    }
    /*function supprimer() {
        $modAdherent = $this->loadModel('Adherent');
        if (isset($_POST['ids'])) {
            $ids = $_POST['ids'];
            $where = '';
            foreach ($ids as $id) {
                $tab = array('conditions' => "ID_ADHERENT = " . $id);
                try {
                    $modAdherent->delete($tab);
                } catch (Exception $ex) {
                    $e->getCode() == 42000;
                }
            }
            $this->liste();
            $this->render('liste');
        }
    }*/

}
