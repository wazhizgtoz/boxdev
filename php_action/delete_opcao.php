<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    $sku_opcao = mysqli_escape_string($connect, $_POST['sku_opcao']); 

    $sql = "DELETE FROM opcao WHERE sku_opcao = '$sku_opcao'";
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Registro excluído com sucesso!";
        header('Location: ../opcao.php');
    else:
        $_SESSION['mensagem'] = "Erro ao excluír";
        header('Location: ../opcao.php');
    endif;
endif; 