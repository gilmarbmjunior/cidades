<?php

class RegiaoController extends RegiaoModel
{

    public static function list($where = '')
    {
        return parent::list($where);
    }

    public static function find($id): array
    {
        return parent::find($id);
    }

    public static function insert(Regiao $regiao): int
    {
        $regiao->setNome($_POST['nome'] ?? null);

        return parent::insert($regiao);
    }

    public static function update(Regiao $regiao)
    {
        $regiao->setId($_POST['id'] ?? null);
        $regiao->setNome($_POST['nome'] ?? null);

        return parent::update($regiao);
    }

    public static function delete($id)
    {
        return parent::delete($id);
    }
}
