<?php

class stage {
    private $id;
    private $idDept;
    private $idstagiaire;
    private $idtypestage;
    private $datedemande;
    private $datedebut;
    private $datefin;
    private $duree;
    private $etat;
    
    function __construct($id, $idDept, $idstagiaire, $idtypestage, $datedemande,$datedebut,$datefin,$duree,$etat) {
        $this->id = $id;
        $this->idDept = $idDept;  
        $this->idstagiaire = $idstagiaire;
        $this->datedemande = $datedemande;
        $this->datedebut = $datedebut;
        $this->datefin = $datefin;
        $this->idtypestage = $idtypestage;
        $this->duree = $duree;
        $this->etat = $etat;
    }
    
    function getId() {
        return $this->id;
    }

    function getIdDept() {
        return $this->idDept;
    }

    function getIdStagiaire() {
        return $this->idstagiaire;
    }
    
    function getDateDemande() {
        return $this->datedemande;
    }
    
    function getDateDebut() {
        return $this->datedebut;
    }

    function getDateFin() {
        return $this->datefin;
    }
     function getidTypeStage() {
        return $this->idtypestage;
    }
    function getDuree() {
        return $this->duree;
    }
    function getEtat() {
        return $this->etat;
    }
    
        public function __toString() {
        return $this->idE." ".$this->nom." ".$this->prenom." ".$this->dateNaissance." ".$this->telephone." ".$this->adresse;
    }


    
}
