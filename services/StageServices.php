<?php
@session_start();
include_once RACINE . '/Model/stage.php';
include_once RACINE . '/Connexion/connexion.php';
include_once RACINE . '/IDao/IDao.php';

class StageServices implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new connexion();
    }

    public function create($o) {
        $query = "INSERT INTO stage (`id`,`idDepartement`,`idStagiairee`, `idTypeStage`,`datedemande`,`dateDebut`, `dateFin`, `duree`,`etat`) VALUES (NULL,'".$o->getIdDept()."','" .$o->getIdStagiaire()."','".$o->getidTypeStage()."','".$o->getDateDemande()."','".$o->getDateDebut()."','".$o->getDateFin()."','".$o->getDuree()."','".$o->getEtat()."')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');

    }
    
    public function update($o) {
        $query = "UPDATE `stage` SET `idDepartement` = '". $o->getIdDept() ."',`idTypeStage` = '". $o->getidTypeStage() ."',`dateDebut` = '". $o->getDateDebut() ."', dateFin = '".$o->getDateFin()."' WHERE `id` = '". $o->getId() ."'";
        
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }
    
    public function updateBySession($o) {
       $session = $_SESSION['IDs'];
        $query = "UPDATE `stage` SET `idDepartement` = '". $o->getIdDept() ."',`idTypeStage` = '". $o->getidTypeStage() ."', `dateDebut` = '". $o->getDateDebut() ."', dateFin = '".$o->getDateFin()."' WHERE `idStagiairee` = '". $session ."'";
        
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function delete($o) {
        $query = "delete from stage where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from stage";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new stage($e->id, $e->idDepartement, $e->idStagiairee, $e->idTypeStage, $e->datedemande, $e->dateDebut, $e->dateFin, $e->duree, $e->etat);
        }
        return $etds;
    }
    
    public function findInfo($session) {
        $etds = array();
        $query = "select * from stage where idStagiairee = " .$session;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
        $etds[] = new stage($e->id, $e->idDepartement, $e->idStagiairee, $e->idTypeStage, $e->datedemande, $e->dateDebut, $e->dateFin, $e->duree, $e->etat);
        }
        return $etds;
    }

    public function findBySession($id) {
        $query = "select * from stage where idStagiairee = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new stage($e->id, $e->idDepartement, $e->idStagiairee, $e->idTypeStage, $e->datedemande, $e->dateDebut, $e->dateFin, $e->duree, $e->etat);
        }
        return $etd;    
    }
    
    public function findById($id) {
        $query = "select * from stage where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new stage($e->id, $e->idDepartement, $e->idStagiairee, $e->idTypeStage, $e->datedemande, $e->dateDebut, $e->dateFin, $e->duree, $e->etat);
        }
        return $etd;    
    }

    public function getAll() {
        $query = "select * from Etudiant";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }
    
    /*public function getLastStagiaireId() {
        $query = "select MAX(id) as lastId from stagiaire";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        $var =  $req->fetch(PDO::FETCH_OBJ);
        return $var->lastId;
    }*/

}
