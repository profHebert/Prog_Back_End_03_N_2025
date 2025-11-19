<?php
include "aula10_menu.php";
if (session_status() == PHP_SESSION_NONE) { session_start(); } 

// Removendo o dado 'usuario'
unset($_SESSION['usuario']);

// Verificando se foi removido
if (!isset($_SESSION['usuario'])) {
    echo 'O usuário foi removido da sessão.<br>';
}
$usuario=$_SESSION['usuario'];
$email=$_SESSION['email'];
echo "Usuario: $usuario<br>";
echo "Email: $email<br>";
?>
<h2>10_04</h2>