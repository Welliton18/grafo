<?php

use model\ModelGrafo;

class ControllerManutencaoPrincipal {
    
    private $SuperGlobalPost;
    
    /** @var ModelGrafo */
    private $ModelGrafo;
    
    public function __construct() {
        $this->getModelGrafo();
        $this->gravaDados();
        if($this->ModelGrafo->getSaida() === $this->ModelGrafo->getChegada() ){
            echo 'Os locais de partida e chegada são os mesmos';
        } else {
            $this->processa($this->ModelGrafo->getMatrizLigacoes()[$this->ModelGrafo->getSaida()], $this->ModelGrafo->getSaida(), 0, [$this->ModelGrafo->getSaida()]);
            echo 'Menor Caminho: '. $this->ModelGrafo->getCaminho(). '.</br>';
            echo 'Valor Menor Caminho: '. $this->ModelGrafo->getMenorCaminho(). '.</br>';
        }
        echo '</br><a href="./grafo.php">Voltar<a>';
    }
    
    private function gravaDados() {
        $this->SuperGlobalPost = $_POST;
        if(isset($this->SuperGlobalPost['calcular_rota'])){
            $this->getModelGrafo()->setSaida($this->SuperGlobalPost['estadoSaida']);
            $this->getModelGrafo()->setChegada($this->SuperGlobalPost['estadoChegada']);
        }
    }
    
    private function processa(array $aEstadoVizinho, $sCaminho, $iValorCaminho, $aEstadosVisitados = []) {
        foreach ($aEstadoVizinho as $sEstado => $iValor) {
            if(!in_array($sEstado, $aEstadosVisitados)){
                $bMenorCaminho = ($iValorCaminho + $iValor) < $this->ModelGrafo->getMenorCaminho();
                if($sEstado !== $this->ModelGrafo->getChegada() && $bMenorCaminho){
                    $sCaminho .= '=> ' . $sEstado;
                    $iValorCaminho += $iValor;
                    $aEstadosVisitados[] = $sEstado;
                    $this->processa($this->ModelGrafo->getMatrizLigacoes()[$sEstado], $sCaminho, $iValorCaminho, $aEstadosVisitados);
                } else if($sEstado === $this->ModelGrafo->getChegada() && $bMenorCaminho){
                    $sCaminho .= '=> ' . $sEstado;
                    $iValorCaminho += $iValor;
                    $this->ModelGrafo->setMenorCaminho($iValorCaminho);
                    $this->ModelGrafo->setCaminho($sCaminho);
                }
            }
        }
    }
    
    /**
     * @return ModelGrafo
     */
    public function getModelGrafo() {
        if(!isset($this->ModelGrafo)){
             $this->ModelGrafo = new ModelGrafo();
        }
        return $this->ModelGrafo;
    }
    
}
    
