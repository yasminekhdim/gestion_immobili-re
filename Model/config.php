<?php
class config
{
    private $pdo;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=GestionImmobiliere";
        $user = 'root';
        $pw = '';
        $this->pdo = new PDO($dsn, $user, $pw);
    }
    public function getConfig()
    {
        return $this->pdo;
    }
}
