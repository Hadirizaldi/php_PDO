<?php
require_once __DIR__ . "/GetConnection.php";

$connection = GetConnection::getConnection();

$username = "admin";
$password = "123";

$sql = "SELECT * FROM admin WHERE username= ? AND password= ?";
$statment = $connection->prepare($sql);
$statment->execute([$username, $password]);

if ($row = $statment->fetch()) {
    echo "Sukses Login : " . $row["username"] . PHP_EOL;
} else {
    echo "Gagal login";
}

$connection = null;
