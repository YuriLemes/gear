<?php
require_once 'SistemaException.php';
require_once 'Servico.php';
/**
 * Created by PhpStorm.
 * User: Yuri Lemes
 * Date: 19/03/2018
 * Time: 09:36
 */

class ServicoBO {

    /**
     * Salva um Servico na base de dados.
     * @param Servico $servico
     * @throws SistemaException se algum valor obrigatório não estiver preenchido.
     */
    public static function save(Servico $servico){
        self::validarDadosObrigatorios($servico);

        $sql = null;
        if(empty($servico->getId())){
            $sql = "INSERT INTO tb_servico (descricao_resumida, descricao_detalhada, cnpj_empresa) VALUES (:desc_resum, :desc_detalhada, :cnpj)";
        }else{
            $sql = "UPDATE tb_servico SET descricao_resumida = :desc_resum, descricao_detalhada = :desc_detalhada WHERE id = :id AND cnpj_empresa = :cnpj";
        }
        $db = db_connect();
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':desc_resum', $servico->getDescricaoResumida());
        $stmt->bindParam(':desc_detalhada', $servico->getDescricaoDetalhada());
        $stmt->bindParam(':cnpj', $cnpj);
        if(!empty($servico->getId())){
            $stmt->bindParam('id', $servico->getId());
        }

        $stmt->execute();

    }

    /**
     * Remove um Serviço da base de dados.
     * @param Servico $servico
     */
    public static function remove(Servico $servico) {
        $cnpj = $_SESSION['login']['cnpj_empresa'];
        if(empty($servico->getId()))
            throw new SistemaException("Para ser removido, o serviço deve possuir ID!");

        $sql = "DELETE * FROM tb_servico WHERE id = :id AND cnpj_empresa = :cnpj";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':id', $servico->getId());
        $stmt->bindParam(':cnpj', $cnpj);
        $stmt->execute();
    }

    /**
     * Retorna a lista com todos os Servicos existentes na base de dados, para a empresa atual;
     * @return array
     */
    public static function findAll(){
        $cnpj = $_SESSION['login']['cnpj_empresa'];
        $sql = "SELECT id, descricao_resumida, descricao_detalhada, cnpj_empresa FROM tb_servico WHERE cnpj_empresa = :cnpj_empresa ORDER BY descricao_resumida";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':cnpj_empresa', $cnpj);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Servico');
    }

    /**
     * Valida dados de preenchimento obrigatório.
     * @param Servico $servico
     * @throws SistemaException se algum valor obrigatório não estiver preenchido.
     */
    public static function validarDadosObrigatorios(Servico $servico){
        if(empty($servico->getDescricaoResumida()))
            throw new SistemaException("Dados obrigatórios não informados!");
    }
}