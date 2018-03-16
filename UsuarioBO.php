<?php
class UsuarioBO {

    /*
     * Retorna o usuario com as configurações iniciais.
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

        if(empty($usuario->getLogin()))
            throw new Exception("Usuário não informado");

        $sql = sprintf("SELECT * FROM tb_usuario WHERE login = :login AND senha = :senha");

        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':login', $usuario->getLogin());
        $stmt->bindParam(':senha',$usuario->getSenha());

        $stmt->execute();
        $usuarios = $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuario');

        if(count($usuarios) <= 0)
            throw new Exception("Usuário e/ou senha inválidos");


        $user = $usuarios[0];

        $_SESSION['login']['logado'] = true;
        $_SESSION['login']['usuario'] = $user->getLogin();
        $_SESSION['login']['cnpj_empresa'] = $user->getCnpjEmpresa();

    }

    static function save(Usuario $usuario) {
        validarDadosObrigatorios($usuario);
        /*if(empty($usuario->getId())){

        }*/
        $sql = "INSERT INTO tb_usuario (login, senha, perfil, ativo, cnpj_oficina) VALUES (:login, :senha, :perfil, :ativo, :cnpj_oficina)";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':login', $usuario->getLogin());
        $stmt->bindParam(':senha',$usuario->getSenha());
        $stmt->bindParam(':perfil',$usuario->getPerfil());
        $stmt->bindParam(':ativo',$usuario->getAtivo());
        $stmt->bindParam(':cnpj_oficina',$usuario->getCnpjOficina());

        $stmt->execute();
    }

    static function update(Usuario $usuario){
        validarDadosObrigatorios($usuario);
        $sql = "UPDATE tb_usuario SET login = :login, senha = :senha, perfil = :perfil, ativo = :ativo, cnpj_oficina = :cnpj_oficina WHERE id = :id";

        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':login', $usuario->getLogin());
        $stmt->bindParam(':senha',$usuario->getSenha());
        $stmt->bindParam(':perfil',$usuario->getPerfil());
        $stmt->bindParam(':ativo',$usuario->getAtivo());
        $stmt->bindParam(':cnpj_oficina',$usuario->getCnpjOficina());

        $stmt->execute();
    }

    /**
     * Remove um usuário da base de dados.
     * @param Usuario $usuario
     */
    static function remove(Usuario $usuario) {

        if(empty($usuario->getId())){
            throw new Exception("Para ser removido, o usuário deve possuir ID!");
        }

        $sql = "DELETE * FROM tb_usuario WHERE id = :id";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':id', $usuario->getId());
        $stmt->execute();
    }

    /**
     * Retorna a lista com todos os Usuarios existentes na base de dados.
     * @return array
     */
    static function findAll(){
        $sql = "SELECT * FROM tb_usuario";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Usuario');
    }

    static function validarDadosObrigatorios(Usuario $usuario){
        if(empty($usuario->getLogin()) || empty($usuario->getSenha()) || empty($usuario->getPerfil()) || empty($usuario->getCnpjOficina())){
            throw new SistemaException("Dados Obrigatorios não Preenchidos");
        }
    }
}