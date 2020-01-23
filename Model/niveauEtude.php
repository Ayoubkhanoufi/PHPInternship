<?php

class niveauetude {
    private $id;
    private $niveauEtude;
    
    function __construct($id, $niveauEtude) {
        $this->id = $id;
        $this->niveauEtude = $niveauEtude;
      
    }
    
    function getId() {
        return $this->id;
    }

    function getNiveauEtude() {
        return $this->niveauEtude;
    }

    
}
