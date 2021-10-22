<?php

class ControllerManutencaoPrincipal {
    
    private $SuperGlobal;
    
    private $MatrizLigacoes;
    
    public function __construct() {
        $this->SuperGlobal = $_POST;
        $this->gravaSessao();
        $this->getMatrizLigacoes();
        header('Location: grafo.php');
    }
    
    private function gravaSessao() {
        if(isset($this->SuperGlobal['calcular_rota'])){
            $_SESSION['estadoSaida']   = $this->SuperGlobal['estadoSaida'];
            $_SESSION['estadoChegada'] = $this->SuperGlobal['estadoChegada'];
        }
    }
    
    private function getMatrizLigacoes() {
        $this->MatrizLigacoes = [
            'AC'=>[
                ['PR' => 200],
                ['AM' => 71],
                ['GO' => 72],
                ['RO' => 35],
            ],
            'AL'=>[
                ['SE' => 32],
                ['PE' => 19],
                ['PB' => 16],
                ['RN' => 33],
            ],
            'AP'=>[
                ['RR' => 24],
                ['AM' => 75],
                ['MA' => 29],
                ['PI' => 39],
            ],
            'AM'=>[
                ['RO' => 61],
                ['AC' => 71],
                ['AP' => 75],
                ['MT' => 81],
                ['TO' => 48],
                ['PI' => 49],
                ['PA' => 43],
                ['MA' => 92],
            ],
            'BA'=>[
                ['MG' => 62],
                ['CE' => 96],
                ['SE' => 46],
                ['DF' => 43],
            ],
            'CE'=>[
                ['PB' => 15],
                ['BA' => 96],
                ['PI' => 34],
                ['RN' => 24],
            ],
            'DF'=>[
                ['GO' => 11],
                ['MG' => 36],
                ['BA' => 43],
                ['TO' => 60],
            ],
            'ES'=>[
                ['RJ' => 10],
                ['SP' => 35],
                ['MG' => 34],
                ['SC' => 135],
            ],
            'GO'=>[
                ['DF' => 11],
                ['MS' => 69],
                ['MG' => 26],
                ['AC' => 72],
                ['TO' => 44],
            ],
            'MA'=>[
                ['PI' => 13],
                ['AP' => 29],
                ['PA' => 66],
                ['AM' => 92],
            ],
            'MT'=>[
                ['MS' => 18],
                ['RO' => 77],
                ['TO' => 79],
                ['AM' => 81],
            ],
            'MS'=>[
                ['SP' => 45],
                ['MT' => 18],
                ['TO' => 74],
                ['GO' => 69],
                ['MG' => 50],
            ],
            'MG'=>[
                ['ES' => 34],
                ['SP' => 47],
                ['MS' => 50],
                ['GO' => 26],
                ['DF' => 36],
                ['PI' => 67],
                ['BA' => 62],
                ['SE' => 64],
            ],
            'PA'=>[
                ['AM' => 43],
                ['RO' => 34],
                ['MA' => 66],
                ['PI' => 27],
            ],
            'PB'=>[
                ['AL' => 16],
                ['RN' => 37],
                ['CE' => 15],
                ['PE' => 41],
            ],
            'PR'=>[
                ['SC' => 31],
                ['AC' => 200],
                ['SP' => 57],
                ['RJ' => 90],
            ],
            'PE'=>[
                ['PB' => 41],
                ['SE' => 14],
                ['AL' => 19],
                ['TO' => 8],
            ],
            'PI'=>[
                ['CE' => 34],
                ['TO' => 76],
                ['PA' => 27],
                ['MA' => 13],
                ['RN' => 53],
                ['MG' => 67],
                ['AP' => 39],
                ['AM' => 49],
            ],
            'RJ'=>[
                ['ES' => 10],
                ['SC' => 130],
                ['PR' => 90],
                ['SP' => 30],
            ],
            'RN'=>[
                ['PB' => 37],
                ['AL' => 33],
                ['CE' => 24],
                ['PI' => 49],
                ['TO' => 61],
            ],
            'RS'=>[
                ['SC' => 40],
            ],
            'RO'=>[
                ['AC' => 35],
                ['MT' => 77],
                ['AM' => 61],
                ['PA' => 34],
            ],
            'RR'=>[
                ['AP' => 24],
            ],
            'SC'=>[
                ['PR' => 31],
                ['RJ' => 130],
                ['ES' => 135],
                ['RS' => 40],
            ],
            'SP'=>[
                ['PR' => 57],
                ['RJ' => 30],
                ['ES' => 35],
                ['MG' => 47],
                ['MS' => 45],
            ],
            'SE'=>[
                ['AL' => 32],
                ['MG' => 64],
                ['BA' => 46],
                ['PE' => 14],
            ],
            'TO'=>[
                ['PI' => 76],
                ['AM' => 48],
                ['MT' => 79],
                ['RN' => 61],
                ['PE' => 8],
                ['DF' => 60],
                ['GO' => 44],
                ['MS' => 74],
            ]
        ];
    }
    
    
}
    
