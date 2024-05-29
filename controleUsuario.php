<?php

require('../model/Usuario.class.php');

if(isset($_POST['autenticar_usuario'])){


$senha = $_POST['senha'];
$credencial = $_POST['credencial'];

$x = new Usuario();
$x->autenticarUsuario($credencial,$senha); 

}



?>
