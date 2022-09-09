<?php



class GetConnection
{
    private static string $host = '127.0.0.1';
    private static int $port = 3306;
    private static string $username = 'root';
    private static string $password = '111213';
    private static string $db = 'php_dasar';

    public static function getConnection(): PDO
    {
        $host = self::$host;
        $port = self::$port;
        $username = self::$username;
        $password = self::$password;
        $db = self::$db;

        return new PDO("mysql:host=$host:$port;dbname=$db", $username, $password);
    }
}
