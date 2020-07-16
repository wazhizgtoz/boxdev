<?php
  // Include Header
    include_once 'includes/header.php';
?>

<div class='row'>
    <div class='s12 m6 push-m3'>
    <h3 class='light'>Cadastrar Pessoa</h3>

    <form action="">
        <div class_alias="input-field col s12">
            <input type="text" name="nomeCompleto" id="nomeCompleto">
            <label for="nomeCompleto">Nome Completo</label>
        </div>

        <div class_alias="input-field col s12">
            <input type="text" name="departamento" id="departamento">
            <label for="departamento">Departamento</label>
        </div>

        <button type="submit" class="btn">Cadastrar</button>
        <a href="pessoa.php" class="btn blue">Listar Pessoas</a>

    </form>
    </div>
</div>












<?php
    // Include Footer
    include_once 'includes/footer.php'; 
?>