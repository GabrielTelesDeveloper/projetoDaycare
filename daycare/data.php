<?php

include_once './config.php';
include_once './core/model.php';

class data extends model {

    public function bemAvaliadas() {

        $data = array();

        $sql = "select c.nome, avg(a.nota) as total 
                from 
                creche c inner join avaliacao_creche ac
                on c.id_creche = ac.id_creche
                inner join avaliacao a 
                on ac.id_avaliacao = a.id_avaliacao group by c.nome desc";
        $sql = $this->db->query($sql);

        // Verificar se teve algum tipo de retorno
        if ($sql->rowCount() > 0) {
            foreach ($sql as $row):
                $data[] = $row;
            endforeach;
            print_r(json_encode($data));
        } else {
            echo '';
        }
    }

}

$data = new data();
$data->bemAvaliadas();

