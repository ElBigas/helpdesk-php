<div class="card-abrir-chamado">
    <div class="card">
        <div class="card-header">
            Editar chamado
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">

                    <div class="mb-2">

                    </div>

                    <?php

                    $sql = "SELECT * FROM chamados WHERE id=" . $_REQUEST["id"];

                    $resultado = $conexao->query($sql);

                    $row = $resultado->fetch_object();
                    ?>

                    <form action="registra_chamado.php" method="POST">

                        <input type="hidden" name="acao" value="editar">

                        <input type="hidden" name="id" value="<?php print $row->id; ?>">

                        <div class="mb-3">
                            <label>Título</label>
                            <input name="titulo" type="text" class="form-control" placeholder="Título" required value="<?php print $row->titulo; ?>" required>
                        </div>

                        <div class="mb-3">
                            <label>Categoria</label>
                            <select name="categoria" class="form-control" value="<?php print $row->categoria; ?>" required>
                                <option>Criação Usuário</option>
                                <option>Impressora</option>
                                <option>Hardware</option>
                                <option>Software</option>
                                <option>Rede</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Descrição</label>
                            <textarea style="resize: none" name="descricao" class="form-control" rows="3" required value="<?php print $row->descricao; ?>"></textarea>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6">
                                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                            </div>

                            <div class="col-6">
                                <button class="btn btn-lg btn-info btn-block" type="submit">Editar</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>