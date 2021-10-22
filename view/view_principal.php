<?php

namespace view;

class ViewPrincipal extends ViewHtml {
    
    public function __construct(array $aEstados, $sEstadoEntradaSelecionado, $sEstadoSaidaSelecionado) {
        parent::__construct();
        $this->criaConsulta($aEstados, $sEstadoEntradaSelecionado, $sEstadoSaidaSelecionado);
    }
    
    private function criaConsulta(array $aEstados, $sEstadoEntradaSelecionado, $sEstadoSaidaSelecionado) {
        $this->criaTitulo(3, 'Registre aqui o caminho desejado:');
        $this->criaCampoEstado('estadoSaida', 'Estado Saída', $aEstados, $sEstadoEntradaSelecionado);
        $this->criaCampoEstado('estadoChegada', 'Estado Chegada', $aEstados, $sEstadoSaidaSelecionado);
        $this->criaBotao('calcular_rota', 'Enviar');
    }
    
   
}
