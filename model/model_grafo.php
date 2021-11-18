<?php
namespace model;

class ModelGrafo {

    private $menorCaminho;
    private $caminho;
    private $saida;
    private $chegada;
    private $estadoVisitado = [];

    public function setMenorCaminho($menorCaminho) {
        $this->menorCaminho = $menorCaminho;
    }
    
    public function getMenorCaminho() {
        if(!isset($this->menorCaminho)){
            $this->menorCaminho = 99999;
        }
        return $this->menorCaminho;
    }

    public function setCaminho($caminho) {
        $this->caminho = $caminho;
    }

    public function getCaminho() {
        return $this->caminho;
    }

    public function setSaida($saida) {
        $this->saida = $saida;
    }

    public function getSaida() {
        return $this->saida;
    }

    public function setChegada($entrada) {
        $this->chegada = $entrada;
    }

    public function getChegada() {
        return $this->chegada;
    }

    public function setEstadoVisitado($estadoVisitado) {
        $this->estadoVisitado[] = $estadoVisitado;
    }
    
    public function getEstadoVisitado() {
        return $this->estadoVisitado;
    }
    
    public function resetEstadosVisitados() {
        $this->estadoVisitado = [];
    }

    public function getMatrizLigacoes() {
        return [
            'AC'=>[
                'RO' => 35,
                'AM' => 71,
                'GO' => 72,
                'PR' => 200,
            ],
            'AL'=>[
                'PB' => 16,
                'PE' => 19,
                'SE' => 32,
                'RN' => 33,
            ],
            'AP'=>[
                'RR' => 24,
                'MA' => 29,
                'PI' => 39,
                'AM' => 75,
            ],
            'AM'=>[
                'PA' => 43,
                'TO' => 48,
                'PI' => 49,
                'RO' => 61,
                'AC' => 71,
                'AP' => 75,
                'MT' => 81,
                'MA' => 92,
            ],
            'BA'=>[
                'DF' => 43,
                'SE' => 46,
                'MG' => 62,
                'CE' => 96,
            ],
            'CE'=>[
                'PB' => 15,
                'RN' => 24,
                'PI' => 34,
                'BA' => 96,
            ],
            'DF'=>[
                'GO' => 11,
                'MG' => 36,
                'BA' => 43,
                'TO' => 60,
            ],
            'ES'=>[
                'RJ' => 10,
                'MG' => 34,
                'SP' => 35,
                'SC' => 135,
            ],
            'GO'=>[
                'DF' => 11,
                'MG' => 26,
                'TO' => 44,
                'MS' => 69,
                'AC' => 72,
            ],
            'MA'=>[
                'PI' => 13,
                'AP' => 29,
                'PA' => 66,
                'AM' => 92,
            ],
            'MT'=>[
                'MS' => 18,
                'RO' => 77,
                'TO' => 79,
                'AM' => 81,
            ],
            'MS'=>[
                'MT' => 18,
                'SP' => 45,
                'MG' => 50,
                'GO' => 69,
                'TO' => 74,
            ],
            'MG'=>[
                'GO' => 26,
                'ES' => 34,
                'DF' => 36,
                'SP' => 47,
                'MS' => 50,
                'BA' => 62,
                'SE' => 64,
                'PI' => 67,
            ],
            'PA'=>[
                'PI' => 27,
                'RO' => 34,
                'AM' => 43,
                'MA' => 66,
            ],
            'PB'=>[
                'CE' => 15,
                'AL' => 16,
                'RN' => 37,
                'PE' => 41,
            ],
            'PR'=>[
                'SC' => 31,
                'SP' => 57,
                'RJ' => 90,
                'AC' => 200,
            ],
            'PE'=>[
                'TO' => 8,
                'SE' => 14,
                'AL' => 19,
                'PB' => 41,
            ],
            'PI'=>[
                'MA' => 13,
                'PA' => 27,
                'CE' => 34,
                'AP' => 39,
                'AM' => 49,
                'RN' => 53,
                'MG' => 67,
                'TO' => 76,
            ],
            'RJ'=>[
                'ES' => 10,
                'SP' => 30,
                'PR' => 90,
                'SC' => 130,
            ],
            'RN'=>[
                'CE' => 24,
                'AL' => 33,
                'PB' => 37,
                'PI' => 49,
                'TO' => 61,
            ],
            'RS'=>[
                'SC' => 40,
            ],
            'RO'=>[
                'PA' => 34,
                'AC' => 35,
                'AM' => 61,
                'MT' => 77,
            ],
            'RR'=>[
                'AP' => 24,
            ],
            'SC'=>[
                'PR' => 31,
                'RS' => 40,
                'RJ' => 130,
                'ES' => 135,
            ],
            'SP'=>[
                'RJ' => 30,
                'ES' => 35,
                'MS' => 45,
                'MG' => 47,
                'PR' => 57,
            ],
            'SE'=>[
                'PE' => 14,
                'AL' => 32,
                'BA' => 46,
                'MG' => 64,
            ],
            'TO'=>[
                'PE' => 8,
                'GO' => 44,
                'AM' => 48,
                'DF' => 60,
                'RN' => 61,
                'MT' => 79,
                'MS' => 74,
                'PI' => 76,
            ]
        ];
    }

}