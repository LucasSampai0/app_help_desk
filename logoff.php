<?php

session_start();

/* 
//remover índices do array de sessão
//unset() remove indices de qualquer array ($_SESSION, $_GET, $_POST);

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


unset($_SESSION['x']); //remove o índice apenas se ele existir

echo '<pre>';
print_r($_SESSION);
echo '</pre>';

//destruir todos os índices da variável de sessão
//session_destroy()

session_destroy(); //será destruída
-> forçar um redirecionamento para atualizar os índices da $_SESSION

echo '<pre>';
print_r($_SESSION);
echo '</pre>'
*/

session_destroy();
header("Location: index.php")

    ?>