<?php

class Db
{
    private $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $dbname = 'my_blog';
        $user = 'root';
        $pass = '';

        $this->pdo = new PDO(
            "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
            $user,
            $pass
        );
    }

    public function query(string $sql, array $params = []): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        if (false === $result) {
            return null;
        }

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }
}
