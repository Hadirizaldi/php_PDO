<?php

$host = '127.0.0.1';
$port = 3306;
$username = 'root';
$password = '111213';
$db = 'php_dasar';


try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$db", $username, $password);
    echo "Sukses koneksi ke database mysql" . PHP_EOL;

    // menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "gagal terkoneksi ke mysql" . $exception->getMessage() . PHP_EOL;
}
