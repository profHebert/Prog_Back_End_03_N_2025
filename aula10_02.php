<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); } 
//imprimir o usuário e o e-mail armazenados na session
echo "Usuario: $usuario<br>";
echo "Email: $email<br>";
?>