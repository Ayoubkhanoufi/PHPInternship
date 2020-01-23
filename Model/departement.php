<?php

class departement {
    private $id;
    private $nomdept;
    
    function __construct($id, $nomdept) {
        $this->id = $id;
        $this->nomdept = $nomdept;
      
    }
    
    function getId() {
        return $this->id;
    }

    function getNomdept() {
        return $this->nomdept;
    }
    
}
