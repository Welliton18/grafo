<?php

namespace controller;

use ControllerManutencaoPrincipal,
    view\ViewPrincipal;

class ControllerConsultaPrincipal {
    
    public function __construct() {
        if(isset($_POST['calcular_rota'])){
            new ControllerManutencaoPrincipal();
        } else {
            $this->criaTela();
        }
    }
    
    private function criaTela() {
        $sEstadoEntradaSelecionado = isset($_SESSION['estadoSaida']) ? $_SESSION['estadoSaida'] : null;
        $sEstadoSaidaSelecionado   = isset($_SESSION['estadoChegada']) ? $_SESSION['estadoChegada'] : null;
        new ViewPrincipal($this->getEstados(), $sEstadoEntradaSelecionado, $sEstadoSaidaSelecionado);
    }
    
    private function getEstados() {
        return [
            'AC'=>'Acre',
            'AL'=>'Alagoas',
            'AP'=>'Amapá',
            'AM'=>'Amazonas',
            'BA'=>'Bahia',
            'CE'=>'Ceará',
            'DF'=>'Distrito Federal',
            'ES'=>'Espírito Santo',
            'GO'=>'Goiás',
            'MA'=>'Maranhão',
            'MT'=>'Mato Grosso',
            'MS'=>'Mato Grosso do Sul',
            'MG'=>'Minas Gerais',
            'PA'=>'Pará',
            'PB'=>'Paraíba',
            'PR'=>'Paraná',
            'PE'=>'Pernambuco',
            'PI'=>'Piauí',
            'RJ'=>'Rio de Janeiro',
            'RN'=>'Rio Grande do Norte',
            'RS'=>'Rio Grande do Sul',
            'RO'=>'Rondônia',
            'RR'=>'Roraima',
            'SC'=>'Santa Catarina',
            'SP'=>'São Paulo',
            'SE'=>'Sergipe',
            'TO'=>'Tocantins'
        ];
    }
}