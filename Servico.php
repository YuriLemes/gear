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
    private $descResumida;
    private $descDetalhada;

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
    public function getDescResumida()
    {
        return $this->descResumida;
    }

    /**
     * @param mixed $descResumida
     */
    public function setDescResumida($descResumida)
    {
        $this->descResumida = $descResumida;
    }

    /**
     * @return mixed
     */
    public function getDescDetalhada()
    {
        return $this->descDetalhada;
    }

    /**
     * @param mixed $descDetalhada
     */
    public function setDescDetalhada($descDetalhada)
    {
        $this->descDetalhada = $descDetalhada;
    }

}