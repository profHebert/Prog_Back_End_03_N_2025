<?php

if (session_status() == PHP_SESSION_NONE) { session_start(); } 
$msg=$_GET["msg"];
// Salvando informações do usuário na sessão
$_SESSION['usuario'] = 'joao';
$_SESSION['email'] = 'joao@email.com';
include "aula10_menu.php";
echo "Dados da sessão armazenados! -- $msg";

?>
<h2>10_01</h2>