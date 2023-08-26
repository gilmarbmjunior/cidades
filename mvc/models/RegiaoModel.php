<?php

require_once '../connection/DB.php';
require_once '../objects/Regiao.php';

class RegiaoModel extends Regiao
{
    //listar todos os registros

    public static function list()
    {
        $sql = 'SELECT * FROM regiao';

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
        $sql = 'SELECT * FROM regiao WHERE id = :id';

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

    public static function insert(Regiao $regiao)
    {
        $sql = 'INSERT INTO regiao (nome) VALUES (:nome)';

        $dao = DB::conn();
        $stmt = $dao->prepare($sql);

        $nome = $regiao->getNome();

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);

        try {
            $stmt->execute();
            return $dao->lastInsertId();
        } catch (PDOException $e) {
            return null;
        }
    }

    //atualizar um registro

    public static function update(Regiao $regiao)
    {
        $sql = 'UPDATE regiao SET nome = :nome WHERE id = :id';

        $dao = DB::conn();
        $stmt = $dao->prepare($sql);

        $nome = $regiao->getNome();
        $id = $regiao->getId();

        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
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
        $sql = 'DELETE FROM regiao WHERE id = :id';

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
