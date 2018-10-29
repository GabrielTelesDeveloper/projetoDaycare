<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-institution"></i> <?= $info['nome'] ?>
                    <h3 class="box-title"></h3>
                    <span class="pull-right"><i class="fa fa-star"></i>
                        <b><?php
                            if (!empty($review)) {
                                echo number_format($review['nota'], 1)
                                ?>
                            </b><?php
                        } else {
                            echo "&nbsp;Não há avaliação!";
                        }
                        ?>
                    </span>
                </div>
                <div class="box-body">
                    <div class="col-md-3" >
                        <img src="https://belaspraias.com.br/content/default.png" width="150" class="box-img-detail" />
                    </div>
                    <br>
                    <dl class="col-md-9">

                        <div class="col-md-4">
                            <dt class="">
                                <i class="fa fa-child"></i> Faixa Etária</dt>
                            <dd><?= $info['faixa_etaria'] ?></dd>
                            <br>
                            <dt>
                                <i class="fa fa-calendar"></i> Horário</dt>
                            <dd><?= $info['horario'] ?></dd>
                            <br>
                        </div>
                        <div class="col-md-5">
                            <dt>
                                <i class="fa fa-phone"></i> Telefone</dt>
                            <dd><?= $info['telefone'] ?></dd>
                            <br>
                            <dt>
                                <i class="fa fa-map-pin"></i> Endereço</dt>
                            <dd><?= $info['descricao_endereco'] ?></dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Sobre o espaço</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">

                        <p align="justify" style="font-size: 16px">
                            <?= $info['descricao'] ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Serviços</h3>&nbsp;
                    <a href="<?= BASE_URL ?>creches/addServico/<?= $info['id_creche'] ?>" class="btn btn-sm btn-primary"><strong><span class="fa fa-plus"></span></strong></a>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">

                        <?php
                        if (!empty($servicos)) {
                            foreach ($servicos as $s):
                                ?>
                                <div class="col-md-6 borda2">
                                    <a href="<?= BASE_URL ?>creches/deletarServico/<?= $info['id_creche'] ?>/<?= $s['id_servico'] ?>" class="close"><strong>&times;</strong></a>
                                    <span class="fa fa-check"></span> <?= $s['descricao'] ?>
                                </div>
                                <?php
                            endforeach;
                        }else {
                            echo '<span class = "fa fa-warning"> </span> &nbsp; Não há serviços cadastrados!';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Principais Comentários &nbsp;
                        <a href="<?= BASE_URL ?>creches/addAvaliacao/<?= $info['id_creche'] ?>" class="btn btn-sm btn-success"><strong>Avaliar</strong></a>
                    </h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
                        <?php
                        foreach ($avaliacoes as $a):
                            ?>
                            <div class="col-md-6">
                                <a href="<?= BASE_URL ?>creches/deleteAvaliacao/<?= $a['id_avaliacao'] ?>" class="close"><strong>&times;</strong></a><br>
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <span class="review-score pull-right">
                                            <i class="fa fa-star"></i> <?= $a['nota'] ?></span>
                                        <div class="user-block">
                                            <img alt="User Image" class="img-circle" src="https://upload.wikimedia.org/wikipedia/commons/d/d3/User_Circle.png">
                                            <span class="username"><?= $a['nome'] ?></span>
                                            <span class="description"><?= $a['dt_avaliacao'] ?></span>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <p><?= $a['comentario'] ?></p>
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