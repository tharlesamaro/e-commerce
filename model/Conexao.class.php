<?php
/**
 * Created by PhpStorm.
 * User: tharles
 * Date: 15/05/18
 * Time: 16:25
 */

Class Conexao extends Config
{
    private $user;
    private $password;
    private $host;
    private $database;
    protected $obj;
    protected $itens = [];
    protected $prefix;

    function __construct()
    {
        $this->user = self::DB_USER;
        $this->password = self::DB_PASSWORD;
        $this->host = self::DB_HOST;
        $this->database = self::DB_DATABASE;

        try {
            if ($this->connect() == null) {
                $this->connect();
            }
        } catch (Exception $error) {
            exit($error->getMessage() . " <h4>Erro ao conectar com o banco de dados</h4>");
        }
    }

    private function connect()
    {
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ];
        $connection = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->password, $options);
        return $connection;
    }

    function execute_query($query, array $params = null)
    {
        $this->obj = $this->connect()->prepare($query);
        return $this->obj->execute();
    }

    function list_data()
    {
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    function total_data()
    {
        return $this->obj->rowCount();
    }

    function get_itens()
    {
        return $this->itens;
    }
}
