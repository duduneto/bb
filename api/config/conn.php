<?php
class Database{
 
    // specify your own database credentials
    private $host = "mysql.barroseborges.com.br";
    private $db_name = "barroseborges";
    private $username = "barroseborges";
    private $password = "Lb22082014!!";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = new mysqli($this->host,$this->username,$this->password,$this->db_name);
        
 
        return $this->conn;
    }
}
// $host = "http://amysql.f1.k8.com.br"; 
// $user = "barroseborges"; 
// $senha = "Lb22082014!!"; 
// $banco = "barroseborges"; 
// $conn = new mysqli($host, $user, $senha, $banco); 
// if($conn -> connect_errno)
// die('Falha na conexão: ' . $conn->connect_error);
// else print("Conectado.");
?>