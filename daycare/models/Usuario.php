<?php

class Usuario extends model {

    public function getAll() {
        $array = array();

        $sql = "SELECT * FROM avaliacao";
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
