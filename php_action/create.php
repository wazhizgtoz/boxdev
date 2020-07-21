<?php
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $descricao = mysqli_escape_string($connect, $_POST['descricao']);

    $sql = "INSERT INTO opcao(descricao) VALUES('$descricao')";
    if(mysqli_query($connect, $sql)):
        header('Location: .opcao.php?sucesso');
    else:
        header('Location: .opcao.php? Error');
    endif;
endif; 