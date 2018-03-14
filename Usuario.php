<?php
class Usuario {

    static function logar($usuario, $senha) {

        $sql = sprintf("SELECT * FROM tb_usuario WHERE login = :login AND senha = :senha");

        $DB = db_connect();
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':login', $usuario);
        $stmt->bindParam(':senha',$senha);

        $stmt->execute();
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(count($usuarios) <= 0)
            return false;


        $usuario = $usuarios[0];

        $_SESSION['login']['logado'] = true;
        $_SESSION['login']['usuario'] = $usuario['login'];

        return true;
    }

}