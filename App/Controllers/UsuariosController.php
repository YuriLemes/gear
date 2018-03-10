<?php 

namespace App\Controllers;
use App\Exception\ValidacaoException;
use \App\Models\User;
use App\Models\Usuario;
use \App\View;

class UsuariosController {

    /** * Login */
    public function index() { 
        View::make('usuarios.login', []);
    }
 
 
    /**
     * Exibe o formulário de criação de usuário
     */
    public function create() {
        View::make('users.create');
    }

    /**
     *
     */
    public function logar(){
        $login = isset($_POST['usuario']) ? $_POST['usuario'] : '' ;
        $senha = isset($_POST['senha']) ? $_POST['senha'] : '' ;

        try{
            if (empty($login))
                throw new ValidacaoException("Usuário não informado!");

            if(empty($senha))
                throw new ValidacaoException("Senha não informada!");

            Usuario::logar($login,$senha);
            header('Location: /gear');
            exit;
        }catch (ValidacaoException $e){
            View::make('usuarios.login', array('mensagem'=>$e->getMessage()));
        }
    }

    /**
     * Processa o formulário de criação de usuário
     */
    public function store() {
        // pega os dados do formuário
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
 
        if (User::save($name, $email, $gender, $birthdate)) {
            header('Location: /');
            exit;
        }
    }
 
 
 
    /**
     * Exibe o formulário de edição de usuário
     */
    public function edit($id) {

        $user = User::selectAll($id)[0];
 
        \App\View::make('users.edit',['user' => $user,]);
    }
 
 
    /**
     * Processa o formulário de edição de usuário
     */
    public function update() {
        // pega os dados do formuário
        $id = $_POST['id'];
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
 
        if (User::update($id, $name, $email, $gender, $birthdate)) {
            header('Location: /');
            exit;
        }
    }
 
 
    /**
     * Remove um usuário
     */
    public function remove($id) {
        if (User::remove($id)) {
            header('Location: /');
            exit;
        }
    }
}
