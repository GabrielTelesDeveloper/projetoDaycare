<?php

class Uf_Cidade extends model {

    public function getAllUf() {
        $array = array();

        $sql = "SELECT * FROM uf";
        $sql = $this->db->query($sql);

        // Verificar se teve algum tipo de retorno
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        } else {
            echo '';
        }

        return $array;
    }

    public function getAllCidade() {
        $array = array();

        $sql = "SELECT * FROM cidade";
        $sql = $this->db->query($sql);

        // Verificar se teve algum tipo de retorno
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        } else {
            echo '';
        }

        return $array;
    }

}
