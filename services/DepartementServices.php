<?php
include_once RACINE . '/Model/departement.php';
include_once RACINE . '/connexion/connexion.php';
include_once RACINE . '/IDao/IDao.php';

class DepartementServices implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new connexion();
    }

    public function create($o) {
        $query = "INSERT INTO departement (`ID`,`type`, `capacitemin`, `capacitemax`, `etat`, `Prix`,`Image`) VALUES (NULL,'" . $o->gettype() . "', '" . $o->getcapacitemin() . "', '" .$o->getcapacitemax(). "', '" .$o->getetat(). "', '" .$o->getprix(). "','".$o->getimage()."')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');

    }
    
    public function update($o) {
        //$query = "update `Etudiant` SET `nom` = '" . $o->getNom() . "', `prenom` = '" . $o->getPrenom() . "', `DateNaissance` = '" . $o->getDateNaissance() . "', `Telephone` = '" . $o->getTelephone() ."', `adresse` = '" . $o->getAdresse() . "' WHERE `idE` = '" . $o->getId() ."'";
        $query = "UPDATE `Etudiant` SET `NOM` = '". $o->getNom() ."',`PRENOM` = '". $o->getPrenom() ."',`DATENAISSANCE` = '". $o->getDateNaissance() ."',`TELEPHONE` = '". $o->getTelephone() ."',`ADRESSE` = '". $o->getAdresse() ."', image = '".$o->getImage()."' WHERE `CNE` = '". $o->getId() ."'";
        
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function delete($o) {
        $query = "delete from Etudiant where CNE = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from departement";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new departement($e->id, $e->nomDept);
        }
        return $etds;
    }
    

    public function findById($id) {
        $query = "select * from departement where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new departement($e->id, $e->nomDept);
        }
        return $etd;    
    }

    public function getAll() {
        $query = "select * from Etudiant";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

}
