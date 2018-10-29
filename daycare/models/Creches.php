<?php

class Creches extends model {
    #1

    public function mediaAcima8() {

        $array = array();

        $sql = "select c.nome, avg(a.nota) as nota 
                from 
                creche c inner join avaliacao a
                on c.id_creche = a.id_creche
                group by c.nome having avg(a.nota) >= 8 order by nota desc";
        $sql = $this->db->query($sql);

        // Verificar se teve algum tipo de retorno
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        } else {
            echo '';
        }

        return $array;
    }

    #2

    public function bemAvaliadas() {

        $array = array();

        $sql = "select c.nome, avg(a.nota) as total 
                from 
                creche c inner join avaliacao a
                on c.id_creche = a.id_creche
                group by c.nome order by total desc LIMIT 3";
        $sql = $this->db->query($sql);

        // Verificar se teve algum tipo de retorno
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        } else {
            echo '';
        }

        return $array;
    }

    public function getAll() {
        $array = array();

        $sql = "select * from creche LIMIT 5";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        } else {
            echo '';
        }

        return $array;
    }

    public function getServicos() {
        $array = array();

        $sql = "select * from servico";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        } else {
            echo '';
        }

        return $array;
    }

    #3

    public function getAllCrechesServico($id) {
        $array = array();

        $sql = "select c.nome, s.descricao, s.id_servico
                from
                creche c inner join servico_creche sc
                on c.id_creche = sc.id_creche
                inner join servico s
                on sc.id_servico = s.id_servico where c.id_creche = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function get($id) {
        $array = array();

        $sql = "SELECT * FROM creche WHERE id_creche = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            // Pegar somente a única linha do contato
            $array = $sql->fetch();
        }

        return $array;
    }

    #4

    public function getNota($id) {
        $array = array();
        $sql = "select c.nome,avg(a.nota) as nota
                from 
                avaliacao a inner join creche c
                on a.id_creche = c.id_creche
                where c.id_creche = :id group by c.nome";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            // Pegar somente a única linha do contato
            $array = $sql->fetch();
        }

        return $array;
    }

    #5

    public function getAvaliacao($id) {
        $array = array();
        $sql = "select c.nome, a.comentario, a.dt_avaliacao, a.nota, a.nome, a.id_avaliacao
                from
                creche c inner join avaliacao a
                on c.id_creche = a.id_creche
                where c.id_creche = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function add($nome, $descricao, $horario, $faixa_etaria, $telefone, $telefone_comercial, $cep, $uf, $cidade, $bairro, $descricao_endereco, $complemento) {

        $sql = "INSERT INTO creche (nome, descricao, horario, faixa_etaria, telefone, telefone_comercial, cep, id_uf, id_cidade, bairro, descricao_endereco, complemento) VALUES (:nome, :descricao, :horario, :faixa_etaria, :telefone, :telefone_comercial, :cep, :uf, :cidade, :bairro, :descricao_endereco, :complemento )";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':horario', $horario);
        $sql->bindValue(':faixa_etaria', $faixa_etaria);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':telefone_comercial', $telefone_comercial);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':uf', $uf);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':descricao_endereco', $descricao_endereco);
        $sql->bindValue(':complemento', $complemento);
        $sql->execute();
    }

    public function deletar($id) {
        $sql = "DELETE FROM creche WHERE id_creche = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function adicionarServico($id_creche, $id_servico) {
        $sql = "INSERT INTO servico_creche VALUES (:id_creche, :id_servico)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_creche', $id_creche);
        $sql->bindValue(':id_servico', $id_servico);
        $sql->execute();
    }

    public function deletarServico($id_creche, $id_servico) {
        $sql = "DELETE FROM servico_creche WHERE id_creche = :id_creche AND id_servico = :id_servico";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_creche', $id_creche);
        $sql->bindValue(':id_servico', $id_servico);
        $sql->execute();
    }

    public function update($nome, $descricao, $horario, $faixa_etaria, $telefone, $telefone_comercial, $cep, $uf, $cidade, $bairro, $descricao_endereco, $complemento, $id) {
        $sql = "UPDATE creche SET nome = :nome, descricao = :descricao, horario = :horario, faixa_etaria = :faixa_etaria, telefone = :telefone, telefone_comercial = :telefone_comercial, cep = :cep, id_uf = :uf, id_cidade = :cidade, bairro = :bairro, descricao_endereco = :descricao_endereco, complemento = :complemento WHERE id_creche = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':descricao', $descricao);
        $sql->bindValue(':horario', $horario);
        $sql->bindValue(':faixa_etaria', $faixa_etaria);
        $sql->bindValue(':telefone', $telefone);
        $sql->bindValue(':telefone_comercial', $telefone_comercial);
        $sql->bindValue(':cep', $cep);
        $sql->bindValue(':uf', $uf);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':descricao_endereco', $descricao_endereco);
        $sql->bindValue(':complemento', $complemento);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function adicionarAvaliacao($nome, $comentario, $nota, $creche) {
        $sql = "INSERT INTO avaliacao (nome, dt_avaliacao, comentario, nota, id_creche) VALUES (:nome, now(), :comentario, :nota, :id_creche)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':comentario', $comentario);
        $sql->bindValue(':nota', $nota);
        $sql->bindValue(':id_creche', $creche);
        $sql->execute();
    }

    public function deleteAvaliacao($id) {
        $sql = "DELETE FROM avaliacao WHERE id_avaliacao = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

}
