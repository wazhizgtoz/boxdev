<?php
    // Include Header
include_once 'includes/header.php';
?>

<div class='row'>
    <div class='s12 m6 push-m3'>
    <h3 class = 'light'>Cadastrar Opção</h3>

    <form action="php_action/add_opcao" methodo="POST">
        <div class = "input-field col s12">
            <input type="text" name="descricao" id="descricao">
            <label for="opcao">Opcao</label>
        </div>
        <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
        <a href="opcao.php" class="btn blue">Listar opções</a>
    </form>
      
    </div>
</div>



<?php
    // Include Footer
include_once 'includes/footer.php'
?> 