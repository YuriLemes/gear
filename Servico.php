<?php
/**
 * Created by PhpStorm.
 * User: Yuri Lemes
 * Date: 19/03/2018
 * Time: 09:08
 */

class Servico
{
    private $id;
    private $descricao_resumida;
    private $descricao_detalhada;
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
    public function getDescricaoResumida()
    {
        return $this->descricao_resumida;
    }

    /**
     * @param mixed $descricao_resumida
     */
    public function setDescricaoResumida($descricao_resumida)
    {
        $this->descricao_resumida = $descricao_resumida;
    }

    /**
     * @return mixed
     */
    public function getDescricaoDetalhada()
    {
        return $this->descricao_detalhada;
    }

    /**
     * @param mixed $descricao_detalhada
     */
    public function setDescricaoDetalhada($descricao_detalhada)
    {
        $this->descricao_detalhada = $descricao_detalhada;
    }

    /**
     * @return mixed
     */
    public function getCnpjEmpresa()
    {
        return $this->cnpj_empresa;
    }

    /**
     * @param mixed $cnpj_empresa
     */
    public function setCnpjEmpresa($cnpj_empresa)
    {
        $this->cnpj_empresa = $cnpj_empresa;
    }

}