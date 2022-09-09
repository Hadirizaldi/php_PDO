<?php

require_once __DIR__ . "/GetConnection.php";


$connection = GetConnection::getConnection();

$username = $connection->quote("admin';#");
$password = $connection->quote("salah gak peduli");

$sql = "SELECT * FROM admin WHERE username=$username AND password=$password";

// print out $sql
echo $sql . PHP_EOL;

$statment = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statment as $row) {
    // jika sukses masuk
    $success = true;
    $find_user = $row['username'];
}

if ($success) {
    echo "Sukses login dengan username : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login";
}

$connection = null;
