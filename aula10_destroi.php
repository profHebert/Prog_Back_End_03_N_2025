<?php
include "aula10_menu.php";
session_start();

// Destruindo a sessão
session_destroy();

// Limpando os dados da variável $_SESSION
$_SESSION = array();

echo 'Sessão destruída.';
?>

