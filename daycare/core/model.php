<?php

# Arquivo auxiliador para fazer a conexão no banco de dados no model

class model {

    //Pode ser usada em qualquer classe que faz a extensão
    protected $db;

    public function __construct() {
        global $db;

        $this->db = $db;
    }

}
