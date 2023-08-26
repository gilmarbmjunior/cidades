<?php

require_once 'mvc/connection/DB.php';

/**
 * SHOW TABLES
 *
 * DESCRIBE regiao
 * DESCRIBE estado
 * DESCRIBE municipio
 *
 * SELECT * FROM regiao
 * SELECT * FROM estado
 * SELECT * FROM municipio
 */

$query = 'SELECT * FROM municipio';

$dao = DB::conn();
$stmt = $dao->prepare($query);
$stmt->execute();

$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($lista);
echo '</pre>';
