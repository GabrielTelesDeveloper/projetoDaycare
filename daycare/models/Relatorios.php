<?php

class Relatorios extends model {

    public function getTotalUsuarios() {
        $sql = "SELECT COUNT(*) as totalUsuarios FROM avaliacao";
        $sql = $this->db->query($sql);
        $sql = $sql->fetch();
        return $sql['totalUsuarios'];
    }

    public function getTotalCreches() {
        $sql = "SELECT COUNT(*) as totalCreches FROM creche";
        $sql = $this->db->query($sql);
        $sql = $sql->fetch();
        return $sql['totalCreches'];
    }

}
