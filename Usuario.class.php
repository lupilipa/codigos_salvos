<?php

class Usuario{

    public function autenticarUsuario($credencial, $senha){
        $pdo = new PDO("mysql:host=localhost;dbname=proj_reserva", "root", "");
        $consulta = "select * from usuarios where :credencial = credencial and :senha = senha";
        $consultafeita = $pdo->prepare($consulta);
        $consultafeita->bindValue(":credencial", $credencial);
        $consultafeita->bindValue(":senha", $senha);
        $consultafeita->execute();
        $x = $consultafeita->rowCount();
        if($x>0){
            session_start();
            foreach($consultafeita as $value){
            $_SESSION['tipo'] = $value['tipo'];
            }
                header('location:../control/controle_login.php?opc=1');
                     } else {
                        header('location:../view/funcionario/ger_rel_func/reg_reserva/erro_login.php');
        
                }

        
    }

    public function cadastrarUsuario($credencial, $senha){
        $pdo = new PDO("mysql:host=localhost;dbname=proj_reserva", "root", "");
        $consulta = "select * from usuarios where :credencial = credencial and :senha = senha";
        $consultafeita = $pdo->prepare($consulta);
        $consultafeita->bindValue(":credencial", $credencial);
        $consultafeita->bindValue(":senha", $senha);
        $consultafeita->execute();
        $x = $consultafeita->rowCount();
        if($x>0){
            session_start();
            foreach($consultafeita as $value){
            $_SESSION['tipo'] = $value['tipo'];
            }
                header('location:../control/controle_login.php?opc=1');
                     } else {
                        header('location:../view/funcionario/ger_rel_func/reg_reserva/erro_login.php');
        
                }

        
    }

}





?>
