<?php

    // Conexão com banco
    include_once 'php_action/db_connect.php';    

    // Include Header
include_once 'includes/header.php';
?>

<div class='row'>
    <div class='s12 m6 push-m3'>
    <h3 class = 'light'>Opções</h3>
        <table class = 'striped'>
            <thead>
                <tr>
                    <th>Descrição</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $sql = "SELECT descricao FROM opcao";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['descricao']; ?></td>

                    <td><a href="editar.php?sku_opcao=<?php echo $dados['sku_opcao']; ?>" class ="btn-floating orange"><i class = "material-icons"> edit </i></a></td>
                    <td><a href="" class = "btn-floating red"><i class = "material-icons"> delete </i></a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <br>
        <a href="add_opcao.php" class ='btn'>Adicionar opção</a>
    </div>
</div>

<?php
    // Include Footer
include_once 'includes/footer.php'
?>    