<?php

require('../model/Usuario.class.php');

if(isset($_GET['opc'])) {
    $opc = $_GET['opc'];

    switch($opc) {
        case 1:
            session_start();
            if ($_SESSION['tipo'] == "admin") {
                header("location:../view/adm/ger_esp_equip/ger_reserva/menu_admin.php");
            }else{
                header("location:../view/funcionario/ger_rel_func/reg_reserva/menu_funci.php");
            }
    }
}



?>
