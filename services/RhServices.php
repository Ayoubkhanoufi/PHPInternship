<?php
include_once RACINE . '/Model/responsableRH.php';
include_once RACINE . '/connexion/connexion.php';
include_once RACINE . '/IDao/IDao.php';

class RhServices implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new connexion();
    }

    public function create($o) {
        $query = "INSERT INTO responsablerh (`id`, `nom`, `prenom`,`adresse`, `telephone`,`email`,`login`,`mdp`) VALUES (NULL,'".$o->getNom()."','".$o->getPrenom()."','".$o->getAdresse()."','".$o->getTelephone()."','".$o->getEmail()."','".$o->getLogin()."','" .$o->getMdp()."')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');

    }
    
    public function update($o) {
       $query = "UPDATE `responsablerh` SET `prenom` = '". $o->getPrenom() ."',`nom` = '". $o->getNom() ."',`adresse` = '". $o->getAdresse()."',`telephone` = '". $o->getTelephone() ."',`email` = '". $o->getEmail() ."',`login` = '". $o->getLogin() ."',`mdp` = '". $o->getMdp()."' WHERE `id` = '". $o->getId() ."'";
        
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function delete($o) {
        $query = "delete from responsablerh where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from responsablerh";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
        $etds[] = new responsableRH($e->id, $e->nom, $e->prenom, $e->email, $e->telephone, $e->adresse, $e->login , $e->mdp);
        }
        return $etds;
    }
    
    public function findById($id) {
        $query = "select * from responsablerh where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new responsableRH($e->id, $e->nom, $e->prenom, $e->email, $e->telephone, $e->adresse, $e->login , $e->mdp);
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
