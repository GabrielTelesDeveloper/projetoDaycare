<?php

class homeController extends controller {

    public function index() {

        $dados = array();

        $usuario = new Usuario();

        $dados['info'] = $usuario->getAll();

        # Carregar o template da home
        $this->loadTemplate('home', $dados);
    }

}
