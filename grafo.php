<?php

use controller\ControllerConsultaPrincipal;

require_once './controller/controller_consulta_principal.php';
require_once './controller/controller_manutencao_principal.php';
require_once 'view/view_html.php';
require_once 'view/view_principal.php';

    session_start();
    new ControllerConsultaPrincipal();

