<section>
    <div class="row">
        <form method="POST" enctype="multipart/form-data" action="<?= BASE_URL ?>creches/salvarServico">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><span class="fa fa-check"></span> Novo serviço</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">

                        <div class="col-md-12">

                            <input type="hidden" name="creche" id="creche" value="<?= $info['id_creche'] ?>">

                            <div class="col-md-3 borda">
                                <label>Serviço</label>
                                <select name="servico" class="form-control">
                                    <?php foreach ($servico as $s): ?>
                                        <option value="<?= $s['id_servico'] ?>"><?= $s['descricao'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <input type="submit" value="Salvar" class="btn btn-sm btn-primary"/>    
                        <a href="<?= BASE_URL; ?>creches/crecheId/<?= $info['id_creche'] ?>" class="btn btn-sm btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>