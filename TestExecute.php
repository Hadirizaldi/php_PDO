<?php

require_once __DIR__ . "/GetConnection.php";

$connection = GetConnection::getConnection();

try {
    $sql = <<< SQL
    INSERT INTO customers(id, name, email)
    VALUES ('mayang', 'Mayang', 'mayang@gmail.com');
SQL;

    $connection->exec($sql);

    $connection = null;
} catch (PDOException $exception) {
    echo "Gagal karena " . $exception->getMessage() . PHP_EOL;
}
