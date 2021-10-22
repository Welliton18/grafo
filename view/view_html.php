<?php

namespace view;

abstract class ViewHtml {
    
    public function __construct() {
        $this->criaCabecalho();
        $this->criaInicioFormulario();
    }
    
    public function criaCabecalho() {
        echo '<!DOCTYPE html>
                <html lang="pt-br">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Grafo</title>
                </head>
                <body>';
    }
    
    public function criaRodape() {
        echo '</form>
           </body>
         </html>';
    }
    
    public function criaTitulo($iTipo, $sTexto) {
        echo "<h{$iTipo}>{$sTexto}<h{$iTipo}>";
    }
    
    protected function criaInicioFormulario() {
        echo '<form name="formulario" method="POST">';
    }
    
    public function criaBotao($sName, $sValue) {
        echo "<input type='submit' name='{$sName}' value='{$sValue}' />";
    }
    
    public function criaCampoEstado($sNome, $sTitulo, $aEstados, $sEstadoSelecionado) {
        echo "<span style='margin-left:21px'; name='{$sNome}'>{$sTitulo}:</span>
              <select id='{$sNome}' name='{$sNome}' required='required'>";
        echo "<option value='' selected>Selecione...</option>";
        foreach ($aEstados as $sSigla => $sNome) {
            $sValue = ($sEstadoSelecionado === $sSigla) ? "'value='{$sSigla}' selected='selected'" : "value='{$sSigla}'";
            echo "<option {$sValue}>{$sNome}</option>" ;
        }
        echo '</select> </br><hr>';
    }
    
    public function __destruct() {
        $this->criaRodape();
    }
    
}
?>
