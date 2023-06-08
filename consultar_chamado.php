<div class="container">
    <div class="row">
        <div class="card-consultar-chamado">
            <div class="card">
                <div class="card-header">
                    Consulta de chamado
                </div>

                <div class="card-body">

                    <?php

                    $sql = "SELECT * FROM chamados";

                    $resultado = $conexao->query($sql);

                    $qtd = $resultado->num_rows;

                    if ($qtd > 0) {

                        while ($row = $resultado->fetch_object()) {

                    ?> <div class="card mb-3 bg-light">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "Ticket $row->id [$row->titulo]" ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo "$row->categoria" ?></h6>
                                    <p class="card-text"><?php echo "$row->descricao" ?></p>
                                    <?php

                                    echo '<a href="?page=editar&id=' . $row->id . '" class="btn btn-success">Editar</a>
                                    <button onclick="if(confirm(\'Tem certeza que deseja excluir?\')){location.href=\'?page=salvar&acao=excluir&id=' . $row->id . '\'}else{false};" class="btn btn-danger">Excluir</button>';
                                    ?>
                                </div>
                            </div>

                    <?php
                        }
                    } else {
                        echo '<p class="alert alert-danger">Não foram encontrados resultados!</p>';
                    }
                    ?>

                    <div class="row mt-5">
                        <div class="col-6">
                            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>