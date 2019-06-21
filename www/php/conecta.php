<?php
class ClassCONN
{
    private $db, $host, $use, $senha, $conn, $sql;
    function __construct()
    {
        $this->db = 'carros';
        $this->host = 'localhost';
        $this->use = 'root';
        $this->senha = 'jldcs0512';
        self::FunctionExete();
    }
    protected function FunctionExete()
    {
        $this->conn = new PDO("mysql:dbhost=$this->host;dbname=$this->db",$this->use,$this->senha);
       
    }
    function ExectSQL($qry)
    {
        $this->sql = $this->conn->prepare($qry);	
        $this->sql->execute();	
		return $this->sql;
    }
}
