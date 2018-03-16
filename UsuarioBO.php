<?php
class UsuarioBO {

    static function logar(Usuario $usuario) {

        if(empty($usuario->getLogin())){
            throw new Exception("Usuário não informado");
        }


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

    }

    static function save(Usuario $usuario) {
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

    static function remove(Usuario $usuario) {
        $sql = "DELETE * FROM tb_usuario WHERE id = :id";
        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':id', $usuario->getId());
        $stmt->execute();
    }
}