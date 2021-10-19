<?php

namespace view;

class ViewPrincipal {
    
    public function criaCampoEstado($sNome, $sTitulo, $aEstados, $sEstadoSelecionado) {
        echo "<span style='margin-left:21px'; name='{$sNome}'>{$sTitulo}:</span>
              <select id='{$sNome}' name='{$sNome}' required='required'>
              <option value='' selected>Selecione...</option>";
        foreach ($aEstados as $sSigla => $sNome) {
            $sValue = ($sEstadoSelecionado == $sSigla) ? $sSigla . ' "selected' : $sSigla . '"';
            echo "<option value='{$sValue}'>{$sNome}</option>" ;
        }
        echo '</select> </br><hr>';
    }
    
}
