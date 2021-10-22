<?php

class ControllerManutencaoPrincipal {
    
    private $SuperGlobal;
    
    public function __construct() {
        $this->SuperGlobal = $_POST;
        $this->gravaSessao();
        header('Location: grafo.php');
    }
    
    private function gravaSessao() {
        if(isset($this->SuperGlobal['calcular_rota'])){
            $_SESSION['estadoSaida']   = $this->SuperGlobal['estadoSaida'];
            $_SESSION['estadoChegada'] = $this->SuperGlobal['estadoChegada'];
        }
    }
    
    
    
}
    
