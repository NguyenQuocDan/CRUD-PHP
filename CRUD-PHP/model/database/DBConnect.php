<?php

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct($_dsn, $_username, $password)
    {
        $this->dsn = $_dsn;
        $this->username = $_username;
        $this->password = $password;
    }

    public function connect()
    {
        $conn = null;

        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        return $conn;
    }
}
