<?php 

namespace App\Models; 
use App\DB;
use App\Exception\ValidacaoException;

class Usuario {

    /**
     * @param $login
     * @param $senha
     * @return bool
     * @throws ValidacaoException
     */
    public static function logar($login, $senha) {
        
        $sql = sprintf("SELECT login, senha FROM tb_usuario WHERE login = :login AND senha = :senha");
        
        $DB = new DB;
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha',$senha);

        $stmt->execute();
        $usuarios = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        if(count($usuarios) <= 0)
            throw new ValidacaoException("Usuário e/ou senha inválidos");


        $usuario = $usuarios[0];

        $_SESSION['login']['logado'] = true;
        $_SESSION['login']['usuario'] = $usuario['login'];
    }

    /** * Busca usuários * *
    * Se o ID não for passado, busca todos.
    * Caso contrário, filtra pelo ID especificado.
    */ 
    public static function selectAll($id = null) { 

        $where = '';

        if (!empty($id)) {
            $where = 'WHERE id = :id';
        }

        $sql = sprintf("SELECT id, login, senha, perfil, ativo, cnpj_oficina FROM tb_usuario %s ORDER BY name ASC", $where); 

        $DB = new DB;
        $stmt = $DB->prepare($sql);
 
        if (!empty($where)){
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        }
 
        $stmt->execute();
 
        $users = $stmt->fetchAll(\PDO::FETCH_ASSOC);
 
        return $users;
    }
 
 
    /**
     * Salva no banco de dados um novo usuário
     */
    public static function save($login, $nome, $senha, $perfil ,$ativo, $cnpj_oficina) {

        // validação (bem simples, só pra evitar dados vazios)
        if (self::validarDadosVazios($login, $nome, $senha, $perfil ,$ativo, $cnpj_oficina)) {
          
            // a data vem no formato dd/mm/YYYY
            // então precisamos converter para YYYY-mm-dd
            $isoDate = dateConvert($birthdate);
              
            // insere no banco
            $DB = new DB;
            $sql = "INSERT INTO users(login, nome, senha, perfil, ativo, cnpj_oficina) VALUES (:login, :nome, :senha, :perfil, :ativo, :cnpj_oficina)";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':perfil', $perfil);
            $stmt->bindParam(':ativo', $ativo, \PDO::PARAM_BOOL);
            $stmt->bindParam(':cnpj_oficina', $cnpj_oficina);
     
            if ($stmt->execute()) {
                return true;
            } else {
                echo "Erro ao cadastrar usuário";
                print_r($stmt->errorInfo());
                return false;
            }
        } else {
            return false;
        }
    }
 
 
 
    /**
     * Altera no banco de dados um usuário
     */
    public static function update($id, $login, $nome, $senha, $perfil ,$ativo, $cnpj_oficina) {
        // validação (bem simples, só pra evitar dados vazios)
        if (validarDadosVazios($login, $nome, $senha, $perfil ,$ativo, $cnpj_oficina)) {

            // a data vem no formato dd/mm/YYYY
            // então precisamos converter para YYYY-mm-dd
            $isoDate = dateConvert($birthdate);
              
            // insere no banco
            $DB = new DB;
            $sql = "UPDATE tb_usuario SET login = :login, senha = :senha, perfil = :perfil, ativo = :ativo, cnpj_oficina = :cnpj_oficina WHERE id = :id";
            $stmt = $DB->prepare($sql);
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
            $stmt->bindParam(':login', $login);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':senha', $senha);
            $stmt->bindParam(':perfil', $perfil);
            $stmt->bindParam(':ativo', $ativo, \PDO::PARAM_BOOL);
            $stmt->bindParam(':cnpj_oficina', $cnpj_oficina);
           
     
            if ($stmt->execute()) {
                return true;
            } else {
                echo "Erro ao atualizar usuário";
                print_r($stmt->errorInfo());
                return false;
            }
        } else {
            return false;
        }
          
        
    }
 
 
    /**
     * Remove do banco de dados o usuário que possuir o id passado como parametro.
     */
    public static function remove($id)
    {
        // valida o ID
        if (empty($id)) {
            exit("ID não informado");
        }
          
        // remove do banco
        $DB = new DB;
        $sql = "DELETE FROM tb_usuario WHERE id = :id";
        $stmt = $DB->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
          
        if ($stmt->execute()) {
            return true;
        } else {
            echo "Erro ao remover";
            print_r($stmt->errorInfo());
            return false;
        }
    }

    
    private static function validarDadosVazios($login, $nome, $senha, $perfil ,$ativo, $cnpj_oficina){
        if(empty($login)){
            echo "Login não preenchido";
            return false;
        }
        
        if(empty($nome)){
            echo "Nome não preenchido";
            return false;
        }
        
        if(empty($perfil)){
            echo "Perfil não preenchido";
            return false;
        }

        if(empty($cnpj_oficina)){
            echo "Cnpj da Empresa não preenchido";
            return false;
        }

        return true;
    }
}