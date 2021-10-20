<?php

namespace controller;

use view\ViewHtml,
    view\ViewPrincipal;

require_once 'view/view_html.php';
require_once 'view/view_principal.php';

class ControllerConsultaPrincipal {
    
    public function teste() {
        $oViewHtml = new ViewHtml();
        $oViewHtml->criaCabecalho();
        $oViewHtml->criaTitulo(3, 'Registre aqui o caminho desejado:');

        $aEstadosBrasileiros = $this->getEstados();

        $oViewPrincipal = new ViewPrincipal();
        $oViewPrincipal->criaCampoEstado('estadoSaida', 'Estado Saída', $aEstadosBrasileiros, isset($_POST['estadoSaida']) ? $_POST['estadoSaida'] : []);
        $oViewPrincipal->criaCampoEstado('estadoChegada', 'Estado Chegada', $aEstadosBrasileiros, isset($_POST['estadoChegada']) ? $_POST['estadoChegada'] : []);
    //
    //            $oGrafo = new ModelGrafo();
    //            $oGrafo->setVertices('teste');
    //            echo $oGrafo->getVertices();
    //
    //            if(!isset($_POST['estadoSaida']) || !isset($_POST['estadoChegada'])){
    //                // Montar a lista dos Estados para a saída
    //                echo ' <span style="margin-left:21px">Local Saída: </span>
    //                    <select id="estadoSaida" name="estadoSaida" required="required">;
    //                        <option value="" selected>Selecione...</option>';
    //                foreach ($aEstadosBrasileiros as $sSigla => $sNome) {
    //                    $sTeste = (isset($_POST['estadoSaida']) && $_POST['estadoSaida'] == $sSigla) ? $sSigla . ' "selected' : $sSigla . '"';
    //                    echo '<option value="' . $sTeste . '">'. $sNome . '</option>' ;
    //                }
    //                echo '</select> </br><hr>';
    //
    //                // Montar a lista dos Estados para a chegada
    //                echo ' <span>Local Chegada: </span>
    //                    <select id="estadoChegada" name="estadoChegada" required="required">
    //                        <option value="" selected>Selecione...</option>';
    //                foreach ($aEstadosBrasileiros as $sSigla => $sNome) {
    //                    $sTeste = isset($_POST['estadoChegada']) && $_POST['estadoChegada'] == $sSigla  ? $sSigla . ' "selected' : $sSigla . '"';
    //                    echo '<option value="' . $sTeste . '">'. $sNome . '</option>' ;
    //                }
    //                echo '</select> <br> <br>  <button type="submit">Calcular menor distância</button> </form> </br>';
    //            } else if(isset($_POST['estadoSaida']) && isset($_POST['estadoChegada'])){
    //                print_r($_POST);
    //                echo '</br></br><button type="submit">Fazer outro cálculo</button>';
    //            }

            $oViewHtml->criaCabecalho();
        }
        
        public function getEstados() {
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