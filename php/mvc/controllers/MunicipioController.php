<?php

class MunicipioController extends MunicipioModel
{

    public static function list($where = '')
    {
        return parent::list($where);
    }

    public static function find($id): array
    {
        return parent::find($id);
    }

    public static function insert(Municipio $municipio)
    {
        $municipio->setNome($_POST['nome'] ?? null);
        $municipio->setCapital($_POST['capital'] ?? null);
        $municipio->setIdEstado($_POST['id_estado'] ?? null);
        $municipio->setIdRegiao($_POST['id_regiao'] ?? null);

        return parent::insert($municipio);
    }

    public static function update(Municipio $municipio)
    {
        $municipio->setId($_POST['id'] ?? null);
        $municipio->setNome($_POST['nome'] ?? null);
        $municipio->setCapital($_POST['capital'] ?? null);
        $municipio->setIdEstado($_POST['id_estado'] ?? null);
        $municipio->setIdRegiao($_POST['id_regiao'] ?? null);

        return parent::update($municipio);
    }

    public static function delete($id)
    {
        return parent::delete($id);
    }
}
