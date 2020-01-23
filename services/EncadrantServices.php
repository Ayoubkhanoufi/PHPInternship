<?php
include_once RACINE . '/Model/encadrant.php';
include_once RACINE . '/connexion/connexion.php';
include_once RACINE . '/IDao/IDao.php';

class EncadrantServices implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new connexion();
    }

    public function create($o) {
        $query = "INSERT INTO encadrant (`id`,`idDept`, `civilite`, `nom`, `prenom`, `telephone`,`email`,`adresse`) VALUES (NULL,'".$o->getIddept()."','" .$o->getCivilite()."','".$o->getNom()."','".$o->getPrenom()."','".$o->getTelephone()."','".$o->getEmail()."','".$o->getAdresse()."')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');

    }
    
    public function update($o) {
       $query = "UPDATE `encadrant` SET `idDept` = '". $o->getIddept() ."',`civilite` = '". $o->getCivilite()."',`prenom` = '". $o->getPrenom() ."',`nom` = '". $o->getNom() ."',`adresse` = '". $o->getAdresse()."',`telephone` = '". $o->getTelephone() ."',`email` = '". $o->getEmail() ."' WHERE `id` = '". $o->getId() ."'";
        
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function delete($o) {
        $query = "delete from encadrant where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from encadrant";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
        $etds[] = new encadrant($e->id, $e->nom, $e->idDept , $e->civilite,  $e->prenom, $e->email, $e->telephone, $e->adresse);
        }
        return $etds;
    }
    
    public function findById($id) {
        $query = "select * from encadrant where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new encadrant($e->id, $e->nom, $e->idDept , $e->civilite,  $e->prenom, $e->email, $e->telephone, $e->adresse);
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
        $query = "select MAX(id) as lastId from stagiaire";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        $var =  $req->fetch(PDO::FETCH_OBJ);
        return $var->lastId;
    }

}
