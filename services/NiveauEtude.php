<?php
include_once RACINE . '/Model/niveauEtude.php';
include_once RACINE . '/Connexion/connexion.php';
include_once RACINE . '/IDao/IDao.php';

class NiveauEtudeServices implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new connexion();
    }

    public function create($o) {
        $niveau = addslashes($o->getNiveauEtude());
        
        $query = "INSERT INTO niveauetude (`id`,`niveauEtude`) VALUES (NULL,'" . $niveau . "')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');

    }
    
    public function update($o) {
        $niveau = addslashes($o->getNiveauEtude());
        
        $query = "UPDATE `Etudiant` SET `NOM` = '". $o->getNom() ."',`PRENOM` = '". $o->getPrenom() ."',`DATENAISSANCE` = '". $o->getDateNaissance() ."',`TELEPHONE` = '". $o->getTelephone() ."',`ADRESSE` = '". $o->getAdresse() ."', image = '".$o->getImage()."' WHERE `CNE` = '". $o->getId() ."'";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function delete($o) {
        $query = "delete from niveauetude where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from niveauetude ORDER by niveauEtude";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new niveauetude($e->id, $e->niveauEtude);
        }
        return $etds;
    }
    

    public function findById($id) {
        $query = "select * from niveauetude where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new niveauetude($e->id, $e->niveauEtude);
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
