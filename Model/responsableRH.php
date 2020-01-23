<?php

class responsableRH {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $adresse;
    private $login;
    private $mdp;
    
    function __construct($id, $nom, $prenom, $email,$telephone, $adresse,$login,$mdp) {
        $this->id = $id;
        $this->nom = $nom;  
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->adresse = $adresse;
        $this->login = $login;
        $this->mdp = $mdp;
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

    function getEmail
    () {
        return $this->email;
    }

    function getTelephone() {
        return $this->telephone;
    }
     function getAdresse() {
        return $this->adresse;
    }
      function getLogin() {
        return $this->login;
    }
     function getMdp() {
        return $this->mdp;
    }

    function setId($id) {
        $this->id = $id;
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
        function setLogin($login) {
        $this->login=$login;
    }
     function setMdp($mdp) {
        $this->mdp=$mdp;
    }

    
        public function __toString() {
        return $this->id." ".$this->nom." ".$this->prenom." ".$this->dateNaissance." ".$this->telephone." ".$this->adresse;
    }


    
}
