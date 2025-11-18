<?php

//como carregar o menu em todos os arquivos??
if (session_status() == PHP_SESSION_NONE) { session_start(); } 
//imprimir o usuário e o e-mail armazenados na session
$usuario=$_SESSION['usuario'];
$email=$_SESSION['email'];
echo "Usuario: $usuario<br>";
echo "Email: $email<br>";
?>
<h2>10_03</h2>