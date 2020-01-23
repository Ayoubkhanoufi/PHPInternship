<?php

class Stagiaire {
    private $id;
    private $idNiveau;
    private $civilite;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $adresse;
    private $datenaissance;
    private $mdp;
    private $cv;
    private $specialite;
    private $etablissement;
    private $demandeStage;
    
    function __construct($id, $idNiveau,$civilite, $nom, $prenom, $email,$telephone, $adresse,$datenaissance,$mdp, $cv, $specialite, $etablissement, $demandeStage) {
        $this->id = $id;
        $this->idNiveau = $idNiveau;
        $this->civilite = $civilite;
        $this->nom = $nom;  
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->datenaissance = $datenaissance;
        $this->mdp = $mdp;
        $this->cv = $cv;
        $this->specialite = $specialite;
        $this->etablissement = $etablissement;
        $this->demandeStage = $demandeStage;
    }
    
    function getId() {
        return $this->id;
    }
    function getIdNiveau() {
        return $this->idNiveau;
    }
    function getCivilite() {
        return $this->civilite;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelephone() {
        return $this->telephone;
    }
     function getAdresse() {
        return $this->adresse;
    }
      function getDateNaissance() {
        return $this->datenaissance;
    }
     function getmdp() {
        return $this->mdp;
    }
     function getCv() {
        return $this->cv;
    }
     function getSpecialite() {
        return $this->specialite;
    }
     function getEtablissement() {
        return $this->etablissement;
    }
    function getDemandeStage() {
        return $this->demandeStage;
    }
    
        public function __toString() {
        return $this->id." ".$this->nom." ".$this->prenom." ".$this->datenaissance." ".$this->telephone." ".$this->adresse;
    }


    
}
