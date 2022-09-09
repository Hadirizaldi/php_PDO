<?php
require_once __DIR__ . "/GetConnection.php";

$connection = GetConnection::getConnection();

$username = "admin";
$password = "123";


// binding parameter
// ===========================
// $sql = "SELECT * FROM admin WHERE username= :param1 AND password= :param2";
// $statment = $connection->prepare($sql);
// $statment->bindParam("param1", $username);
// $statment->bindParam("param2", $password);
// $statment->execute();


// bindin parameter - index
// =============================
// $sql = "SELECT * FROM admin WHERE username= ? AND password= ?";
// $statment = $connection->prepare($sql);
// $statment->bindParam(1, $username);
// $statment->bindParam(2, $password);
// $statment->execute();


// shortcut
// ===============================
$sql = "SELECT * FROM admin WHERE username= ? AND password= ?";
$statment = $connection->prepare($sql);
$statment->execute([$username, $password]);

// Cek login 
// ===============================
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
