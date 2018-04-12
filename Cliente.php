<?php
class Cliente {
	
	private $id;
	private $dataCadastro;
	private $dataSuspenso;
	private $nome;
	private $razaoSocial;
	private $cpfCnpj;
	private $ie;
	private $logradouro;
	private $complemento;
	private $numeroEndereco;
	private $setor;
    private $cidade;
    private $estado;
	private $cep;
	private $telefoneFixo;
	private $telefoneCelular;
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
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    /**
     * @param mixed $dataCadastro
     */
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }

    /**
     * @return mixed
     */
    public function getDataSuspenso()
    {
        return $this->dataSuspenso;
    }

    /**
     * @param mixed $dataSuspenso
     */
    public function setDataSuspenso($dataSuspenso)
    {
        $this->dataSuspenso = $dataSuspenso;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * @param mixed $razaoSocial
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    /**
     * @return mixed
     */
    public function getCpfCnpj()
    {
        return $this->cpfCnpj;
    }

    /**
     * @param mixed $cpfCnpj
     */
    public function setCpfCnpj($cpfCnpj)
    {
        $this->cpfCnpj = $cpfCnpj;
    }

    /**
     * @return mixed
     */
    public function getIe()
    {
        return $this->ie;
    }

    /**
     * @param mixed $ie
     */
    public function setIe($ie)
    {
        $this->ie = $ie;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return mixed
     */
    public function getNumeroEndereco()
    {
        return $this->numeroEndereco;
    }

    /**
     * @param mixed $numeroEndereco
     */
    public function setNumeroEndereco($numeroEndereco)
    {
        $this->numeroEndereco = $numeroEndereco;
    }

    /**
     * @return mixed
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * @param mixed $setor
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }
    
    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $setor
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    
    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $setor
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getTelefoneFixo()
    {
        return $this->telefoneFixo;
    }

    /**
     * @param mixed $telefoneFixo
     */
    public function setTelefoneFixo($telefoneFixo)
    {
        $this->telefoneFixo = $telefoneFixo;
    }

    /**
     * @return mixed
     */
    public function getTelefoneCelular()
    {
        return $this->telefoneCelular;
    }

    /**
     * @param mixed $telefoneCelular
     */
    public function setTelefoneCelular($telefoneCelular)
    {
        $this->telefoneCelular = $telefoneCelular;
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