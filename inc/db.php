<?php

class Db {
    public static function connect()
    {
        $pdo = new PDO(
            'mysql:dbname=schoolprog;host=localhost;charset=utf8mb4',
            'explorateur',
            'Ereul9Aeng',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING]
        );

        return $pdo;
    }
}