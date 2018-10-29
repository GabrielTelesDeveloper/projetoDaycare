<?php

class relatoriosController extends controller {

    public function index() {
        $dados = array();
        $relatorio = new Relatorios();
        $dados['usuarios'] = $relatorio->getTotalUsuarios();
        $dados['creches'] = $relatorio->getTotalCreches();
        $this->loadTemplate('relatorios', $dados);
    }

}
