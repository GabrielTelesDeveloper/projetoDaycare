<!DOCTYPE html>
<html>

    <head>
        <title>Daycare</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/css/AdminLTE.min.css">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/ionicons/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/css/_all-skins.min.css">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>assets/alert/sweetalert2.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    </head>

    <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?= BASE_URL ?>" class="logo">
                    <span class="logo-mini"><b></b>D</span>
                    <span class="logo-lg"><b>Daycare</b> </span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">

                        <ul class="nav navbar-nav">

                            <li>
                                <a href="">
                                    <span></span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </header>


            <!-- Coluna a esquerda -->
            <aside class="main-sidebar">

                <section class="sidebar">   

                    <!-- Botão de pesquisa -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <!-- Menu -->
                    <ul class="sidebar-menu">

                        <li class="header">Menu</li>
                        <li><a href="<?= BASE_URL; ?>home"><i class="fa fa-home"></i> <span>Home</span></a></li>
                        <!--li><a href="<?= BASE_URL; ?>usuarios"><i class="fa fa-user"></i> <span>Usuários</span></a></li-->
                        <li><a href="<?= BASE_URL; ?>creches"><i class="fa fa-university"></i> <span>Creches</span></a></li>
                        <li><a href="<?= BASE_URL; ?>relatorios"><i class="fa fa-bar-chart"></i> <span>Relatórios</span></a></li>
                        <li><a href="https://daycare-final-final.herokuapp.com/"><i class="fa fa-globe"></i> <span>Ver app</span></a></li>
                    </ul>
                </section>
            </aside>

            <!-- Conteúdo da página -->
            <div class="content-wrapper">

                <section class="content-header">
                </section>

                <!-- Conteúdo principal -->
                <section class="content">
                    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
                </section>

            </div>

            <!-- Footer -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <strong>Daycare</strong>
                </div>
                <strong>Copyright &copy; 2018 <a href="#">Daycare</a>.</strong> Todos os direitos reservados.
            </footer>
        </div>

        <script type="text/javascript" src="<?= BASE_URL; ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= BASE_URL; ?>assets/js/app.min.js"></script>
        <script src="<?= BASE_URL; ?>assets/alert/sweetalert2.all.min.js"></script>
        <script type="text/javascript" src="<?= BASE_URL; ?>assets/js/script.js"></script>

    </body>
</html>
