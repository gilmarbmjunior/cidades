<?php

require_once '../models/EstadoModel.php';

class EstadoController extends EstadoModel
{

    public static function list()
    {
        return parent::list();
    }

    public static function find($id): array
    {
        return parent::find($id);
    }

    public static function insert(Estado $estado)
    {
        $estado->setNome($_POST['nome'] ?? null);
        $estado->setUf($_POST['uf'] ?? null);
        $estado->setIdRegiao($_POST['id_regiao'] ?? null);

        return parent::insert($estado);
    }

    public static function update(Estado $estado)
    {
        $estado->setId($_POST['id'] ?? null);
        $estado->setNome($_POST['nome'] ?? null);
        $estado->setUf($_POST['uf'] ?? null);
        $estado->setIdRegiao($_POST['id_regiao'] ?? null);

        return parent::update($estado);
    }

    public static function delete($id)
    {
        return parent::delete($id);
    }
}
