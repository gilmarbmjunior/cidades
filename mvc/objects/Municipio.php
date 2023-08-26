<?php

class Municipio
{
    private $id;
    private $nome;
    private $capital;
    private $idEstado;
    private $idRegiao;

    //id

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    //nome

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    //capital

    public function getCapital()
    {
        return $this->capital;
    }

    public function setCapital($capital)
    {
        $this->capital = $capital;
    }

    //idEstado

    public function getIdEstado()
    {
        return $this->idEstado;
    }

    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    }

    //idRegiao

    public function getIdRegiao()
    {
        return $this->idRegiao;
    }

    public function setIdRegiao($idRegiao)
    {
        $this->idRegiao = $idRegiao;
    }
}
