<?php

class MunicipioModel extends Municipio
{
    //listar todos os registros

    public static function list($where = '')
    {
        $sql = 'SELECT * FROM municipio ' . $where;

        $dao = DB::conn();
        $stmt = $dao->prepare($sql);

        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return null;
        }
    }

    //buscar apenas um registro

    public static function find($id)
    {
        $sql = 'SELECT * FROM municipio WHERE id = :id';

        $dao = DB::conn();
        $stmt = $dao->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return null;
        }
    }

    //inserir um registro

    public static function insert(Municipio $municipio)
    {
        $sql = 'INSERT INTO municipio (nome, capital, id_estado, id_regiao) VALUES (:nome, :capital, :id_estado, :id_regiao)';

        $dao = DB::conn();
        $stmt = $dao->prepare($sql);

        $nome = $municipio->getNome();
        $capital = $municipio->getCapital();
        $idEstado = $municipio->getIdEstado();
        $idRegiao = $municipio->getIdRegiao();

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':capital', $capital, PDO::PARAM_STR);
        $stmt->bindParam(':id_estado', $idEstado, PDO::PARAM_INT);
        $stmt->bindParam(':id_regiao', $idRegiao, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return $dao->lastInsertId();
        } catch (PDOException $e) {
            return null;
        }
    }

    //atualizar um registro

    public static function update(Municipio $municipio)
    {
        $sql = 'UPDATE municipio SET nome = :nome, capital = :capital, id_estado = :id_estado, id_regiao = :id_regiao WHERE id = :id';

        $dao = DB::conn();
        $stmt = $dao->prepare($sql);

        $nome = $municipio->getNome();
        $capital = $municipio->getCapital();
        $idEstado = $municipio->getIdEstado();
        $idRegiao = $municipio->getIdRegiao();
        $id = $municipio->getId();

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':capital', $capital, PDO::PARAM_STR);
        $stmt->bindParam(':id_estado', $idEstado, PDO::PARAM_INT);
        $stmt->bindParam(':id_regiao', $idRegiao, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    //excluir um registro

    public static function delete($id)
    {
        $sql = 'DELETE FROM municipio WHERE id = :id';

        $dao = DB::conn();
        $stmt = $dao->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
