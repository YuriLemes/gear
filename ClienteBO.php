<?php
require_once 'SistemaException.php';
require_once'Cliente.php';
/**
 * Created by PhpStorm.
 * User: Yuri
 * Date: 11/04/2018
 * Time: 00:36
 */

class ClienteBO{

    /**
     * Salva um cliente no banco de dados
     * @param Cliente $cliente
     */
    public static function save(Cliente $cliente) {
        self::validarDadosObrigatorios($cliente);
        $cnpj = $_SESSION['login']['cnpj_empresa'];
        $sql = null;
        if(empty($cliente->getId())){
            $sql = "INSERT INTO tb_cliente (data_cadastro, data_suspenso, nome, razao_social, cpf_cnpj, ie, logradouro, numero_endereco, complemento, cidade, estado, setor, cep, telefone_fixo, telefone_celular, email, observacoes, cnpj_empresa) VALUES (:data_cadastro, :data_suspenso, :nome, :razao_social, :cpf_cnpj, :ie, :logradouro, :numero_endereco, :complemento, :cidade, :estado, :setor, :cep, :telefone_fixo, :telefone_celular, :email, :observacoes, :cnpj_empresa)";
        } else {
            $sql = "UPDATE tb_cliente SET data_cadastro = :data_cadastro, data_suspenso = :data_suspenso, nome = :nome, razao_social = :razao_social, cpf_cnpj = :cpf_cnpj, ie = :ie, logradouro = :logradouro, numero_endereco = :numero_endereco, complemento = :complemento, cidade = :cidade, estado = :estado, setor = :setor, cep = :cep, telefone_fixo = :telefone_fixo, telefone_celular = :telefone_celular, email = :email, observacoes = :observacoes, cnpj_empresa = :cnpj_empresa WHERE id = :id";
        }
        $db = db_connect();
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':data_cadastro', $cliente->getDataCadastro());
        $stmt->bindParam(':data_suspenso', $cliente->getDataSuspenso());
        $stmt->bindParam(':nome',$cliente->getNome());
        $stmt->bindParam(':razao_social',$cliente->getRazaoSocial());
        $stmt->bindParam(':cpf_cnpj', $cliente->getCpfCnpj());
        $stmt->bindParam(':ie', $cliente->getIe());
        $stmt->bindParam(':logradouro', $cliente->getLogradouro());
        $stmt->bindParam(':numero_endereco', $cliente->getNumeroEndereco());
        $stmt->bindParam(':complemento', $cliente->getComplemento());
        $stmt->bindParam(':cidade', $cliente->getCidade());
        $stmt->bindParam(':estado', $cliente->getEstado());
        $stmt->bindParam(':setor', $cliente->getSetor());
        $stmt->bindParam(':cep', $cliente->getCep());
        $stmt->bindParam(':telefone_fixo', $cliente->getTelefoneFixo());
        $stmt->bindParam(':telefone_celular', $cliente->getTelefoneCelular());
        $stmt->bindParam(':email', $cliente->getEmail());
        $stmt->bindParam(':observacoes', $cliente->getObservacoes());
        $stmt->bindParam(':cnpj_empresa',$cnpj);
        if(!empty($cliente->getId())){
            $id = $cliente->getId();
            $stmt->bindParam(':id', $id);
        }

        return $stmt->execute();
    }
    /**
     * Remove um cliente da base de dados.
     * @param $id
     */
    static function remove($id) {
        $cnpj = $_SESSION['login']['cnpj_empresa'];
        if(empty($id))
            throw new SistemaException("Para ser removido, o cliente deve possuir ID!");
        $sql = "DELETE FROM tb_cliente WHERE id = :id AND cnpj_empresa = :cnpj_empresa";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':cnpj_empresa', $cnpj);
        $stmt->execute();
    }
    /**
     * Suspender um cliente da base de dados.
     * @param $id
     */
    static function suspend($id) {
        $cnpj = $_SESSION['login']['cnpj_empresa'];
        if(empty($id))
            throw new SistemaException("Para ser suspenso, o cliente deve possuir ID!");
        $sql = "UPDATE tb_cliente SET data_suspenso = :data_atual WHERE id = :id AND cnpj_empresa = :cnpj_empresa";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':data_atual', date('Y-m-d'));
        $stmt->bindParam(':cnpj_empresa', $cnpj);
        
        $stmt->execute();
    }
    /**
     * Retorna a lista com todos os Clientes ativos na base de dados, para a empresa atual;
     * @return array
     */
    static function findAllActive(){
        $cnpj = $_SESSION['login']['cnpj_empresa'];
        $s = NULL;
        /*id, nome, login, senha, perfil, ativo, cnpj_empresa*/
        $sql = "SELECT * FROM tb_cliente WHERE cnpj_empresa = :cnpj_empresa ORDER BY nome";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':cnpj_empresa', $cnpj);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Cliente');
    }
    /**
     * Retorna a lista com todos os Usuarios suspensos na base de dados, para a empresa atual;
     * @return array
     */
    static function findAllSuspense(){
        $cnpj = $_SESSION['login']['cnpj_empresa'];
        /*id, nome, login, senha, perfil, ativo, cnpj_empresa*/
        $sql = "SELECT * FROM tb_cliente WHERE cnpj_empresa = :cnpj_empresa ORDER BY nome";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':cnpj_empresa', $cnpj);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Cliente');
    }

    /**
     * Valida dados obrigatórios do usuário e lança uma SistemaException se algum não estiver preenchido.
     * @param Usuario $usuario
     * @throws */

    static function validarDadosObrigatorios(Cliente $cliente){
        if(empty($cliente->getNome()) || empty($cliente->getDataCadastro()) || empty($cliente->getCnpjEmpresa())|| empty($cliente->getCpfCnpj()) || empty($cliente->getIe())){
            throw new SistemaException("Dados obrigatórios não informados!");
        }
    }
    /**
     * Retorna um cliente da base de dados com o id passado, para a empresa atual;
     * @return array
     */
    public static function findById($id){
        $cnpj = $_SESSION['login']['cnpj_empresa'];
        $sql = "SELECT * FROM tb_cliente WHERE id = :id AND cnpj_empresa = :cnpj_empresa ORDER BY nome";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':cnpj_empresa', $cnpj);
        $stmt->execute();
        $usuarios=$stmt->fetchAll(PDO::FETCH_CLASS, 'Cliente');
        return $usuarios[0];
    }
}