<?php
include_once RACINE . '/Model/typeStage.php';
include_once RACINE . '/connexion/connexion.php';
include_once RACINE . '/IDao/IDao.php';

class TypeStageServices implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new connexion();
    }
    
    public function create($o) {
        $type=addslashes($o->getType());
        
        $query = "INSERT INTO typestage (`id`,`type`) VALUES (NULL,'" .$type. "')";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');

    }
    
    public function update($o) {
        $type=addslashes($o->getType());
        
        $query = "UPDATE `typestage` SET `type` = '". $type."' WHERE `id` = '". $o->getId() ."'";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function delete($o) {
        $query = "delete from typestage where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from typestage order by type";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new typeStage($e->id, $e->type);
        }
        return $etds;
    }
    

    public function findById($id) {
        $query = "select * from typestage where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new typeStage($e->id, $e->type);
        }
        return $etd;    
    }

    public function getAll() {
        $query = "select * from typestage";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

}
