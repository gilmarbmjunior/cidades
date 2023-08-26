<?php

class DB
{
    public static function conn(): ?PDO
    {
        try {
            $conn = new PDO('mysql:host=108.181.92.73;port=3306;dbname=cidades;charset=utf8', 'inclus', 'inclus');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (Exception $e) {
            echo new Exception('DB could not be connected: ' . $e->getMessage());
        }
    }
}
