<?php
class Database
{
    private $pdo, $synt;

    public function __construct()
    {
        try {
            $this->pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $m) {
            die($m->getMessage());
        }
    }

    public function query($query)
    {
        $this->synt = $this->pdo->prepare($query);
    }

    public function bind($param, $var)
    {
        if (is_null($var)) {
            $type = PDO::PARAM_NULL;
        } else if (is_bool($var)) {
            $type = PDO::PARAM_BOOL;
        } else if (is_int($var)) {
            $type = PDO::PARAM_INT;
        } else {
            $type = PDO::PARAM_STR;
        }

        $this->synt->bindParam($param, $var, $type);
    }

    public function run()
    {
        $this->synt->execute();
    }

    public function result()
    {
        $this->run();
        return $this->synt->fetch(PDO::FETCH_ASSOC);
    }

    public function results()
    {
        $this->run();
        return $this->synt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function affectedRows()
    {
        $this->run();
        return $this->synt->rowCount();
    }
}
