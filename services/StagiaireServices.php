<?php

@session_start();

include_once RACINE . '/Model/stagiaire.php';
include_once RACINE . '/connexion/connexion.php';
include_once RACINE . '/IDao/IDao.php';

class StagiaireServices implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new connexion();
    }

    public function create($o) {
        $query = "INSERT INTO stagiaire1 (`id`,`idNiveau`, `civilite`, `nom`, `prenom`,`adresse`, `telephone`, `email`, `datenaissance`, `specialite`, `etablissement`, `mdp`, `cv`, `demandeStage`) VALUES (NULL,'".$o->getIdNiveau()."','" .$o->getCivilite()."','".$o->getNom()."','".$o->getPrenom()."','".$o->getAdresse()."','".$o->getTelephone()."','".$o->getEmail()."','".$o->getDateNaissance()."','".$o->getSpecialite()."','".$o->getEtablissement()."','".$o->getmdp()."','".$o->getCv()."','".$o->getDemandeStage()."')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');

    }
    
    public function update($o) {
       $query = "UPDATE `stagiaire1` SET `idNiveau` = '". $o->getIdNiveau() ."',`civilite` = '". $o->getCivilite()."',`prenom` = '". $o->getPrenom() ."',`nom` = '". $o->getNom() ."',`adresse` = '". $o->getAdresse()."',`telephone` = '". $o->getTelephone() ."',`email` = '". $o->getEmail() ."', datenaissance = '".$o->getDateNaissance()."',`specialite` = '". $o->getSpecialite()."',`etablissement` = '". $o->getEtablissement()."',`mdp` = '". $o->getmdp()."' WHERE `id` = '". $o->getId() ."'";
        
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }
    
    public function updateCompte($o) {
       $query = "UPDATE `stagiaire1` SET `idNiveau` = '". $o->getIdNiveau() ."',`civilite` = '". $o->getCivilite()."',`prenom` = '". $o->getPrenom() ."',`nom` = '". $o->getNom() ."',`adresse` = '". $o->getAdresse()."',`telephone` = '". $o->getTelephone() ."',`email` = '". $o->getEmail() ."', datenaissance = '".$o->getDateNaissance()."',`specialite` = '". $o->getSpecialite()."',`etablissement` = '". $o->getEtablissement()."' WHERE `id` = '". $o->getId() ."'";
        
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }
    
    public function updatepassword($o) {
        $session = $_SESSION['IDs'];
        $query = "UPDATE `stagiaire1` SET `mdp` = '". $o->getmdp()."' WHERE `id` = '". $session ."'";
        
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function delete($o) {
        $query = "delete from stagiaire1 where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from stagiaire1";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
        $etds[] = new Stagiaire($e->id, $e->idNiveau, $e->civilite, $e->nom, $e->prenom, $e->email, $e->telephone, $e->adresse, $e->datenaissance, $e->mdp, $e->cv, $e->specialite, $e->etablissement,$e->demandeStage);
        }
        return $etds;
    }
    public function findInfo($session) {
        $etds = array();
        $query = "select * from stagiaire1 where id = ". $session;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
        $etds[] = new Stagiaire($e->id, $e->idNiveau, $e->civilite, $e->nom, $e->prenom, $e->email, $e->telephone, $e->adresse, $e->datenaissance, $e->mdp, $e->cv, $e->specialite, $e->etablissement,$e->demandeStage);
        }
        return $etds;
    }
    
    public function findBysessi($id) {
        $query = "select * from stagiaire1 where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new Stagiaire($e->id, $e->idNiveau, $e->civilite, $e->nom, $e->prenom, $e->email, $e->telephone, $e->adresse, $e->datenaissance, $e->mdp, $e->cv, $e->specialite, $e->etablissement,$e->demandeStage);
        }
        return $etd;    
    }
    
    public function findById($id) {
        $query = "select * from stagiaire1 where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new Stagiaire($e->id, $e->idNiveau, $e->civilite, $e->nom, $e->prenom, $e->email, $e->telephone, $e->adresse, $e->datenaissance, $e->mdp, $e->cv, $e->specialite, $e->etablissement,$e->demandeStage);
        }
        return $etd;    
    }

    public function getAll() {
        $query = "select * from Etudiant";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getLastStagiaireId() {
        $query = "select MAX(id) as lastId from stagiaire1";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        $var =  $req->fetch(PDO::FETCH_OBJ);
        return $var->lastId;
    }

}
