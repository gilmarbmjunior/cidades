<?php

class Estado
{
    private $id;
    private $nome;
    private $uf;
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

    //uf

    public function getUf()
    {
        return $this->uf;
    }

    public function setUf($uf)
    {
        $this->uf = $uf;
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
