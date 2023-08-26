<?php

require_once '../connection/DB.php';
require_once '../objects/Estado.php';

class EstadoModel extends Estado
{
    //listar todos os registros

    public static function list()
    {
        $sql = 'SELECT * FROM estado';

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
        $sql = 'SELECT * FROM estado WHERE id = :id';

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

    public static function insert(Estado $estado)
    {
        $sql = 'INSERT INTO estado (nome, uf, id_regiao) VALUES (:nome, :uf, :id_regiao)';

        $dao = DB::conn();
        $stmt = $dao->prepare($sql);

        $nome = $estado->getNome();
        $uf = $estado->getUf();
        $idRegiao = $estado->getIdRegiao();

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':uf', $uf, PDO::PARAM_STR);
        $stmt->bindParam(':id_regiao', $idRegiao, PDO::PARAM_INT);

        try {
            $stmt->execute();
            return $dao->lastInsertId();
        } catch (PDOException $e) {
            return null;
        }
    }

    //atualizar um registro

    public static function update(Estado $estado)
    {
        $sql = 'UPDATE estado SET nome = :nome, uf = :uf, id_regiao = :id_regiao WHERE id = :id';

        $dao = DB::conn();
        $stmt = $dao->prepare($sql);

        $nome = $estado->getNome();
        $uf = $estado->getUf();
        $idRegiao = $estado->getIdRegiao();
        $id = $estado->getId();

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':uf', $uf, PDO::PARAM_STR);
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
        $sql = 'DELETE FROM estado WHERE id = :id';

        $dao = DB::conn();
        $stmt = $dao->prepare($sql);

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
