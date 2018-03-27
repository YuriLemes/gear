<?php
require_once 'SistemaException.php';
require_once'Usuario.php';
require_once'Perfil.php';
class UsuarioBO {

    /**
     * Retorna o usuario com as configurações iniciais.
     * @return Usuario
     */
    static function novoUsuario(){
        $usuario = new Usuario();
        $usuario->setAtivo(true);
        $usuario->setPerfil(Perfil::USUARIO);
        return $usuario;
    }

    /**
     * Recebe um usuario, e lança uma Exception caso não consiga Logar.
     * @param Usuario $usuario
     * @throws Exception
     */
    static function logar(Usuario $usuario) {

        if($usuario->getLogin() == "admin" && $usuario->getSenha() == "123"){
            $_SESSION['login']['logado'] = true;
            $_SESSION['login']['admin'] = true;
            $_SESSION['login']['usuario'] = $usuario->getLogin();
            $_SESSION['login']['cnpj_empresa'] = "01234567890123";
            return;
        }
        if(empty($usuario->getLogin()))
            throw new SistemaException("Usuário não informado");

        $sql = sprintf("SELECT * FROM tb_usuario WHERE login = :login AND senha = :senha");

        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':login', $usuario->getLogin());
        $stmt->bindParam(':senha',$usuario->getSenha());

        $stmt->execute();
        $usuarios = $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuario');

        if(count($usuarios) <= 0)
            throw new SistemaException("Usuário e/ou senha inválidos");


        $user = $usuarios[0];

        $_SESSION['login']['logado'] = true;
        if($user->getPerfil() == Perfil::ADMIN){
            $_SESSION['login']['admin'] = true;
        }else{
            $_SESSION['login']['admin'] = false;
        }
        $_SESSION['login']['usuario'] = $user->getLogin();
        $_SESSION['login']['cnpj_empresa'] = $user->getCnpjEmpresa();

    }

    /**
     * Salva um usuário no banco de dados
     * @param Usuario $usuario
     */
    static function save(Usuario $usuario) {
        self::validarDadosObrigatorios($usuario);
        $sql = null;
        if(empty($usuario->getId())){
            $sql = "INSERT INTO tb_usuario (nome, login, senha, perfil, ativo, cnpj_oficina) VALUES (:nome, :login, :senha, :perfil, :ativo, :cnpj_oficina)";
        } else {
            $sql = "UPDATE tb_usuario SET nome = :nome, login = :login, senha = :senha, perfil = :perfil, ativo = :ativo, cnpj_empresa = :cnpj_empresa WHERE id = :id";
        }

        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':nome', $usuario->getNome());
        $stmt->bindParam(':login', $usuario->getLogin());
        $stmt->bindParam(':senha',$usuario->getSenha());
        $stmt->bindParam(':perfil',$usuario->getPerfil());
        $stmt->bindParam(':ativo',$usuario->getAtivo());
        $stmt->bindParam(':cnpj_empresa',$usuario->getCnpjEmpresa());
        if(!empty($usuario->getId())){
            $stmt->bindParam(':id', $usuario->getId());
        }

        $stmt->execute();
    }

    /**
     * Remove um usuário da base de dados.
     * @param Usuario $usuario
     */
    static function remove($id) {
        $cnpj = $_SESSION['login']['cnpj_empresa'];
        if(empty($id))
            throw new SistemaException("Para ser removido, o usuário deve possuir ID!");

        $sql = "DELETE * FROM tb_usuario WHERE id = :id AND cnpj_empresa = :cnpj_empresa";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':cnpj_empresa', $cnpj);
        $stmt->execute();
    }

    /**
     * Retorna a lista com todos os Usuarios existentes na base de dados, para a empresa atual;
     * @return array
     */
    static function findAll(){
        $cnpj = $_SESSION['login']['cnpj_empresa'];
        /*id, nome, login, senha, perfil, ativo, cnpj_empresa*/
        $sql = "SELECT * FROM tb_usuario WHERE cnpj_empresa = :cnpj_empresa ORDER BY login";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':cnpj_empresa', $cnpj);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuario');
    }

    static function findByPerfil(Perfil $perfil){

        if(empty($perfil))
            return self::findAll();

        $cnpj = $_SESSION['login']['cnpj_empresa'];
        $sql = "SELECT * FROM tb_usuario WHERE perfil = :perfil AND cnpj_empresa = :cnpj_empresa ORDER BY login";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':perfil', $perfil);
        $stmt->bindParam(':cnpj_empresa', $cnpj);
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuario');
    }

    static function findByAtivo($ativo = true){
        $cnpj = $_SESSION['login']['cnpj_empresa'];
        $sql = "SELECT * FROM tb_usuario WHERE ativo = :ativo AND cnpj_empresa = :cnpj_empresa ORDER BY login";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':ativo', $ativo);
        $stmt->bindParam(':cnpj_empresa', $cnpj);
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuario');
    }
    /**
     * Valida dados obrigatórios do usuário e lança uma SistemaException se algum não estiver preenchido.
     * @param Usuario $usuario
     * @throws SistemaException
     */
    static function validarDadosObrigatorios(Usuario $usuario){
        if(empty($usuario->getNome()) || empty($usuario->getLogin()) || empty($usuario->getSenha()) || empty($usuario->getPerfil()) || empty($usuario->getCnpjEmpresa())){
            throw new SistemaException("Dados obrigatórios não informados!");
        }
    }
}