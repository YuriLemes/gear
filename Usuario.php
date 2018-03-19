<?php
/**
 * Created by PhpStorm.
 * User: Yuri Lemes
 * Date: 15/03/2018
 * Time: 11:41
 */

class Usuario {

    private $id;
    private $login;
    private $senha;
    private $perfil;
    private $ativo;
    private $cnpj_empresa;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * @param mixed $perfil
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }

    /**
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param mixed $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    /**
     * @return mixed
     */
    public function getCnpjEmpresa()
    {
        return $this->cnpj_empresa;
    }

    /**
     * @param mixed $cnpj_oficina
     */
    public function setCnpjEmpresa($cnpj_empresa)
    {
        $this->cnpj_empresa = $cnpj_empresa;
    }


}