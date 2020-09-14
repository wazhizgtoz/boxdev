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
                    $sql = "SELECT * FROM opcao";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['descricao']; ?></td>

                    <td><a href="editar_opcao.php?sku_opcao=<?php echo $dados['sku_opcao']; ?>" class ="btn-floating orange"><i class = "material-icons"> edit </i></a></td>
                    <td><a href="#modal<?php echo $dados['sku_opcao']; ?>" class = "btn-floating red modal-trigger"><i class = "material-icons"> delete </i></a></td>
                        
                          <!-- Modal Structure -->
                            <div id="modal<?php echo $dados['sku_opcao']; ?>" class="modal">
                              <div class="modal-content">
                                <h4>Opa!</h4>
                                <p>Tem certeza que deseja excluír?</p>
                              </div>
                              <div class="modal-footer">
                                
                                <form action="php_action/delete_opcao.php" method="POST">
                                    <input type="hidden" name="sku_opcao" value="<?php echo $dados['sku_opcao']; ?>">
                                    <button type="submit" name="btn-deletar" class="btn red">Sim!</button>

                                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                                </form>

                              </div>
                            </div>
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