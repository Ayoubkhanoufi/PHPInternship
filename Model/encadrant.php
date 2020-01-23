<?php

class encadrant {
    private $id;
    private $civilite;
    private $iddept;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $adresse;
    
    function __construct($id, $nom,$iddept,$civilite, $prenom, $email,$telephone, $adresse) {
        $this->id = $id;
        $this->nom = $nom;  
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->civilite = $civilite;
        $this->iddept = $iddept;
    }
    
    function getId() {
        return $this->id;
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
      function getCivilite() {
        return $this->civilite;
    }
     function getIddept() {
        return $this->iddept;
    }

    function setId($id) {
        $this->idA = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setemail($email) {
        $this->email = $email;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }
     function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
        function setCivilite($civilite) {
        $this->idstage=$civilite;
    }
     function setiddept($iddept) {
        $this->iddept=$iddept;
    }

    
        public function __toString() {
        return $this->idE." ".$this->nom." ".$this->prenom." ".$this->dateNaissance." ".$this->telephone." ".$this->adresse;
    }


    
}
