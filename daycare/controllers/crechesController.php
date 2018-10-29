<?php

class crechesController extends controller {

    public function index() {
        $dados = array();
        $creche = new Creches();
        $dados['crecheMediaAcima'] = $creche->mediaAcima8();
        $dados['crechesBemAvaliadas'] = $creche->bemAvaliadas();
        $dados['allCreches'] = $creche->getAll();
        $this->loadTemplate('creches', $dados);
    }

    public function crecheId($id) {
        $dados = array();

        if (!empty($id)) {

            $creches = new Creches();
            if (!empty($_POST['nome'])) {

                $nome = $_POST['nome'];
            } else {
                $dados['info'] = $creches->get($id);
                $dados['review'] = $creches->getNota($id);
                $dados['servicos'] = $creches->getAllCrechesServico($id);
                $dados['avaliacoes'] = $creches->getAvaliacao($id);
                // Se o id passado existe, carrega o template
                if (isset($dados['info']['id_creche'])) {
                    $this->loadTemplate('viewCreche', $dados);
                    exit();
                }
            }
        }

        header('Location: ' . BASE_URL . 'creches');
    }

    public function addCreche() {
        $dados = array();
        $uf = new Uf_Cidade();
        $dados['uf'] = $uf->getAllUf();
        $dados['cidade'] = $uf->getAllCidade();
        $this->loadTemplate('AddCreche', $dados);
    }

    public function salvar() {

        $creche = new Creches();

        if (!empty($_POST['nome'])) {

            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $horario = $_POST['horario'];
            $faixa_etaria = $_POST['faixa_etaria'];
            $telefone = $_POST['telefone'];
            $telefone_comercial = $_POST['telefone_comercial'];
            $cep = $_POST['cep'];
            $uf = $_POST['uf'];
            $cidade = $_POST['cidade'];
            $bairro = $_POST['bairro'];
            $descricao_endereco = $_POST['descricao_endereco'];
            $complemento = $_POST['complemento'];
            $creche->add($nome, $descricao, $horario, $faixa_etaria, $telefone, $telefone_comercial, $cep, $uf, $cidade, $bairro, $descricao_endereco, $complemento);
            header("location: " . BASE_URL . 'creches');
        } else {
            header("location: " . BASE_URL . 'creches/addCreche');
        }
    }

    public function delete($id) {

        if (!empty($id)) {
            $creche = new Creches();
            $creche->deletar($id);
        }
        // Voltar para a home
        header('Location: ' . BASE_URL . 'creches');
    }

    public function addServico($id) {
        $dados = array();
        $servico = new Creches();

        if (!empty($id)) {

            $dados['info'] = $servico->get($id);

            if (isset($dados['info']['id_creche'])) {
                $dados['servico'] = $servico->getServicos();
                $this->loadTemplate('addServico', $dados);
                exit();
            }
        }
        header('Location: ' . BASE_URL . 'creches');
    }

    public function salvarServico() {

        $servico = new Creches();

        if (!empty($_POST['servico'])) {

            $id_servico = $_POST['servico'];
            $id_creche = $_POST['creche'];
            $servico->adicionarServico($id_creche, $id_servico);
            header("location: " . BASE_URL . "creches/crecheId/{$id_creche}");
        } else {
            header("location: " . BASE_URL . 'creches/addServico');
        }
    }

    public function deletarServico($id_creche, $id_servico) {

        $servico = new Creches();

        if (!empty($id_creche)) {
            $servico->deletarServico($id_creche, $id_servico);
        }
        header('Location: ' . BASE_URL . "creches/crecheId/{$id_creche}");
    }

    public function edit($id) {
        $dados = array();
        $creche = new Creches();
        $uf = new Uf_Cidade();

        if (!empty($id)) {

            if (!empty($_POST['nome'])) {

                $nome = $_POST['nome'];
                $descricao = $_POST['descricao'];
                $horario = $_POST['horario'];
                $faixa_etaria = $_POST['faixa_etaria'];
                $telefone = $_POST['telefone'];
                $telefone_comercial = $_POST['telefone_comercial'];
                $cep = $_POST['cep'];
                $uf = $_POST['uf'];
                $cidade = $_POST['cidade'];
                $bairro = $_POST['bairro'];
                $descricao_endereco = $_POST['descricao_endereco'];
                $complemento = $_POST['complemento'];
                $creche->update($nome, $descricao, $horario, $faixa_etaria, $telefone, $telefone_comercial, $cep, $uf, $cidade, $bairro, $descricao_endereco, $complemento, $id);
            } else {

                $dados['info'] = $creche->get($id);
                $dados['uf'] = $uf->getAllUf();
                $dados['cidade'] = $uf->getAllCidade();

                if (isset($dados['info']['id_creche'])) {
                    $this->loadTemplate('editCreche', $dados);
                    exit();
                }
            }
        }

        header('Location: ' . BASE_URL . 'creches');
    }

    public function addAvaliacao($id) {
        $dados = array();
        $avaliacao = new Creches();

        if (!empty($id)) {

            $dados['info'] = $avaliacao->get($id);

            if (isset($dados['info']['id_creche'])) {
                $this->loadTemplate('addAvaliacao', $dados);
                exit();
            }
        }
        header('Location: ' . BASE_URL . 'creches');
    }

    public function salvarAvaliacao() {

        $avaliacao = new Creches();

        if (!empty($_POST['creche'])) {

            $creche = $_POST['creche'];
            $nome = $_POST['nome'];
            $comentario = $_POST['comentario'];
            $nota = $_POST['nota'];
            $avaliacao->adicionarAvaliacao($nome, $comentario, $nota, $creche);
            header("location: " . BASE_URL . "creches/crecheId/{$creche}");
        } else {
            header("location: " . BASE_URL . 'creches/addAvaliacao');
        }
    }

    public function deleteAvaliacao($id_avaliacao) {

        if (!empty($id_avaliacao)) {
            $avaliacao = new Creches();
            $avaliacao->deleteAvaliacao($id_avaliacao);
        }
        header('Location: ' . BASE_URL . "creches/crecheId/{$id_avaliacao}");
    }

}
