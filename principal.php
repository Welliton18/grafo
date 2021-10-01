<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafo</title>
</head>
<body>
    <h3>Registre aqui o caminho desejado</h3>
    <form method="post">
        <?php
            $aEstadosBrasileiros = [
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

            if(!isset($_POST['estadoSaida']) || !isset($_POST['estadoChegada'])){
                // Montar a lista dos Estados para a saída
                echo ' <span style="margin-left:21px">Local Saída: </span>
                    <select id="estadoSaida" name="estadoSaida" required="required">;
                        <option value="" selected>Selecione...</option>';
                foreach ($aEstadosBrasileiros as $sSigla => $sNome) {
                    $sTeste = (isset($_POST['estadoSaida']) && $_POST['estadoSaida'] == $sSigla) ? $sSigla . ' "selected' : $sSigla . '"';
                    echo '<option value="' . $sTeste . '">'. $sNome . '</option>' ;
                }
                echo '</select> </br><hr>';

                // Montar a lista dos Estados para a chegada
                echo ' <span>Local Chegada: </span>
                    <select id="estadoChegada" name="estadoChegada" required="required">
                        <option value="" selected>Selecione...</option>';
                foreach ($aEstadosBrasileiros as $sSigla => $sNome) {
                    $sTeste = isset($_POST['estadoChegada']) && $_POST['estadoChegada'] == $sSigla  ? $sSigla . ' "selected' : $sSigla . '"';
                    echo '<option value="' . $sTeste . '">'. $sNome . '</option>' ;
                }
                echo '</select> <br> <br>  <button type="submit">Calcular menor distância</button> </form> </br>';
            } else if(isset($_POST['estadoSaida']) && isset($_POST['estadoChegada'])){
                print_r($_POST);
                echo '</br></br><button type="submit">Fazer outro cálculo</button>';
            }
        ?>
    </form>
</body>
</html>