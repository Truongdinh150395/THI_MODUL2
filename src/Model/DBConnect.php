<?php
namespace Test\Model;
use PDO;
class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;
    public function __construct()
    {

        $this->dsn = "mysql:host =localhost;dbname=HANGHOA;charset=utf8";
        $this->username = "root";
        $this->password = "123456@Abc";
    }
    function connect()
    {
        $connect = new PDO($this->dsn,$this->username,$this->password);
        return $connect;
    }
}