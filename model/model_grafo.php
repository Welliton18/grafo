<?php
namespace model;

class ModelGrafo {

    private $Vertices;

    public function getVertices(){
        if(!isset($this->Vertices)){
            
        }
        return $this->Vertices;
    }

    public function setVertices($aVertices){
        $this->Vertices = $aVertices;
    }
    
    public function criaListaVertices() {
//        $aLista = list();
    }

}