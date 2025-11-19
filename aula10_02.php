<?php
include "aula10_menu.php";
if (session_status() == PHP_SESSION_NONE) { session_start(); } 
//imprimir o usuário e o e-mail armazenados na session
$usuario=$_SESSION['usuario'];
$email=$_SESSION['email'];
echo "Usuario: $usuario<br>";
echo "Email: $email<br>";
?>
<h2>10_02</h2>