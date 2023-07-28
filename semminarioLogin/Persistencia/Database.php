<?php
require_once 'Catalogo.php';
class Database {
    private $host = DB_SERVER;
    private $db_name = DB_NAME;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $conn;

    public function connect() {
        $this->conn = null;

        try {
            $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        } catch (mysqli_sql_exception $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this->conn;
    }

    public function close() {
        if($this->conn !== null) {
            $this->conn->close();
        }
    }
}

class Conexion {
    private Database $conexion;

    public function __construct() {
        
       // $this->conexion = mysqli_connect('localhost', 'root', '', 'semminarioLogin');
    }

    public function getConexion() {
        $this->conexion.connect();
        return $this->conexion;
    }

    public function closeConexion() {
        $this->conexion.close();
       // mysqli_close($this->conexion);
    }
}

?>