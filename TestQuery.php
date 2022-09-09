<?php
require_once __DIR__ . "/GetConnection.php";


try {
    $connection = GetConnection::getConnection();

    $sql = "SELECT id, name, email FROM customers";
    $result = $connection->query($sql);

    $connection = null;
} catch (PDOException $exception) {
    echo "gagal karena " . $exception->getMessage() . PHP_EOL;
}

// menampilkan hasil query
foreach ($result as $row) {
    // var_dump($row);
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];

    echo "id : " . $id . PHP_EOL;
    echo "name : " . $name . PHP_EOL;
    echo "email : " . $email . PHP_EOL;
}
