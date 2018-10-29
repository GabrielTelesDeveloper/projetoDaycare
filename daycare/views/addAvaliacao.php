<section>
    <div class="row">
        <form method="POST" enctype="multipart/form-data" action="<?= BASE_URL ?>creches/salvarAvaliacao">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title"> <span class="fa fa-star"></span> &nbsp; Deixe seu comentário</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">

                        <div class="col-md-12">

                            <input type="hidden" name="creche" id="creche" value="<?= $info['id_creche'] ?>">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" name="nome" id="nome" class="form-control" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Comentário</label>
                                    <textarea class="form-control" name="comentario" id="comentario" rows="3" placeholder=""></textarea>
                                </div>
                            </div>  

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nota">Nota:</label>
                                    <input type="number" name="nota" id="nota" class="form-control" min="0" max="10"/>
                                </div>
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