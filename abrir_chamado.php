<div class="card-abrir-chamado">
    <div class="card">
        <div class="card-header">
            Abertura de chamado
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">

                    <form method="post" action="registra_chamado.php">
                        <div class="form-group">
                            <label>Título</label>
                            <input name="titulo" type="text" class="form-control" placeholder="Título" require>
                        </div>

                        <div class="form-group">
                            <label>Categoria</label>
                            <select name="categoria" class="form-control">
                                <option>Criação Usuário</option>
                                <option>Impressora</option>
                                <option>Hardware</option>
                                <option>Software</option>
                                <option>Rede</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Descrição</label>
                            <textarea style="resize: none" name="descricao" class="form-control" rows="3" require></textarea>
                        </div>

                        <div class="row mt-5">
                            <div class="col-6">
                                <a class="btn btn-lg btn-warning btn-block" onclick="javascript:history.go(-1)">Voltar</a>
                            </div>

                            <div class="col-6">
                                <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>