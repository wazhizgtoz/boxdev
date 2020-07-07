<?php
// Conexão com banco de dados

$servername = "localhost";
$username = "cardap";
$password = "cardap";
$db_name = "cardap";


// Metodo usado a partir do PHP 5.1.2
$conexao = oci_connect($username, $password, '127.0.0.1/XE');

if (!$conexao) {
    $erro = oci_error();
    trigger_error(htmlentities($erro['message'], ENT_QUOTES), E_USER_ERROR);
exit;
}


/*  Fonte
    https://blog.fabianobento.com.br/2010/08/php-conexao-com-oracle/
*/