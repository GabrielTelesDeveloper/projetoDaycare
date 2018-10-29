<section>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Todas as creches </h3> &nbsp;
                    <a href="<?= BASE_URL ?>creches/addCreche" class="btn btn-sm btn-primary"><strong><span class="fa fa-plus"> </span> Nova creche</strong></a>
                </div>
                <div class="box-body">
                    <div class="row">

                        <?php
                        foreach ($allCreches as $c):
                            ?>

                            <div class="col-md-4" style="text-decoration:none; color: #000">
                                <div class="info-box">
                                    <a href="<?= BASE_URL ?>creches/crecheId/<?= $c['id_creche'] ?>">
                                        <span class="info-box-icon bg-aqua"><i class="ion ion-image"></i></span>
                                    </a>
                                    <div class="info-box-content">
                                        <span class="info-box-star pull-right"><i class="fa fa-child"></i> <?= $c['faixa_etaria'] ?></span>
                                        <span class="info-box-text"><?= $c['nome'] ?></span>
                                        <span class="info-box-detail"><?= $c['horario'] ?></span><br>
                                        <span class="info-box-text pull-right">
                                            <a href="<?= BASE_URL ?>creches/delete/<?= $c['id_creche'] ?>" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></a>
                                            <a href="<?= BASE_URL ?>creches/edit/<?= $c['id_creche'] ?>" class="btn btn-sm btn-warning"><span class="fa fa-edit"></span></a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Creche Destaque</h3>
                </div>
                <div class="box-body">
                    <div class="row">

                        <?php
                        foreach ($crecheMediaAcima as $c):
                            ?>
                            <div class="col-md-12">
                                <div class="progress-group">
                                    <span class="progress-text"><span class="fa fa-star"></span> <?= $c['nome'] ?></span>
                                    <span class="progress-number"><b><?= number_format($c['nota'], 1) ?></b>/10</span>
                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-yellow" style="width: <?= number_format($c['nota'], 1) * 10 ?>%"></div>
                                    </div>
                                </div>

                            </div>
                            <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Top Creches</h3>
                </div>
                <div class="box-body">
                    <div class="row">

                        <div class="col-md-12">

                            <?php
                            foreach ($crechesBemAvaliadas as $c):
                                ?>
                                <div class="progress-group">
                                    <span class="progress-text"><?= $c['nome'] ?></span>
                                    <span class="progress-number"><b><?= number_format($c['total'], 1) ?></b>/10</span>

                                    <div class="progress sm">
                                        <div class="progress-bar progress-bar-green" style="width: <?= number_format($c['total'], 1) * 10 ?>%"></div>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>