<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $sku_opcao = mysqli_escape_string($connect, $_POST['sku_opcao']);
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);   

    $sql = "UPDATE opcao SET descricao = '$descricao' WHERE sku_opcao = '$sku_opcao'";
    
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar";
        header('Location: ../index.php');
    endif;
endif; 