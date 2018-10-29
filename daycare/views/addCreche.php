<section>
    <div class="row">
        <form method="POST" enctype="multipart/form-data" action="<?= BASE_URL ?>creches/salvar">

            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Nova Creche</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">

                        <div class="col-md-12">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" name="nome" id="nome" class="form-control" />
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Descrição</label>
                                    <textarea class="form-control" name="descricao" id="descricao" rows="3" placeholder="Detalhamento da creche ..."></textarea>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="horario">Horário:</label>
                                    <input type="text" name="horario" id="horario" class="form-control" />
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="faixa_etaria">Faixa Etária:</label>
                                    <input type="text" name="faixa_etaria" id="faixa_etaria" class="form-control" />
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Telefone</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">

                        <div class="col-md-12">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefone">Celular:</label>
                                    <input type="text" name="telefone" id="telefone" class="form-control" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="telefone_comercial">Comercial:</label>
                                    <input type="text" name="telefone_comercial" id="telefone_comercial" class="form-control" />
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>


            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Endereço</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">


                        <div class="col-md-12">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cep">CEP:</label>
                                    <input name="cep" type="text" id="cep" class="form-control"/>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label>UF:</label>
                                <select name="uf" class="form-control">
                                    <?php foreach ($uf as $u): ?>
                                        <option value="<?= $u['id_uf'] ?>"><?= $u['descricao'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label>Cidade:</label>
                                <select name="cidade" class="form-control">
                                    <?php foreach ($cidade as $c): ?>
                                        <option value="<?= $c['id_cidade'] ?>"><?= $c['descricao'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="bairro">Bairro:</label>
                                    <input name="bairro" type="text" id="bairro" size="40" class="form-control" />
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="descricao_endereco">Endereço:</label>
                                    <input name="descricao_endereco" type="text" id="descricao_endereco" size="60" class="form-control"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="complemento">Complemento:</label>
                                    <input type="text" name="complemento" id="complemento" class="form-control" />
                                </div>
                            </div>

                        </div>

                        <input type="submit" value="Salvar" class="btn btn-sm btn-primary"/>    
                        <a href="<?= BASE_URL; ?>creches" class="btn btn-sm btn-danger">Cancelar</a>

                    </div>

                </div>
            </div>
        </form>
    </div>
</section>