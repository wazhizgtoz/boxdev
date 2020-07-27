<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);

    $sql = "INSERT INTO opcao(descricao, data_criacao) VALUES('$descricao', CURTIME())";
    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar";
        header('Location: ../index.php');
    endif;
endif; 