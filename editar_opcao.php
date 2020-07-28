<?php
    //  Conexão com banco        
        include_once 'php_action/db_connect.php';  

    //  Include Header
        include_once 'includes/header.php';

    //  Select
        if(isset($_GET['sku_opcao'])):
            $sku_opcao = mysqli_escape_string($connect, $_GET['sku_opcao']);

            $sql = "SELECT * FROM opcao WHERE sku_opcao = $sku_opcao";

            $resultado = mysqli_query($connect, $sql);

            $dados = mysqli_fetch_array($resultado);
        endif;
?>

    <div class='row'>
        <div class='s12 m6 push-m3'>
            <h3 class = 'light'> Editar Opção </h3>

            <form action="php_action/update_opcao.php" method="POST">
                <div class = "input-field col s12">
                    <input type="text" name="descricao" value="<?php echo $dados['descricao']; ?>" id="descricao" >
                    <label for="descricao"> Descricao </label>
                </div>

                <button type="submit" name="btn-atualizar" class="btn"> Atualizar </button>
                <a href="opcao.php" class="btn blue"> Listar opções </a>
            </form>
        
        </div>
    </div>

<?php
    //  Include Footer
        include_once 'includes/footer.php';
?>
