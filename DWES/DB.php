<?php
class DB {
    private $databaseType = "mysql";
    private $database = "";
    private $host = "localhost";
    private $usuario = "";
    private $clave = "";

    private PDO $db;

    function __construct($database, $usuario, $clave) {
        $this->database = $database;
        $this->usuario = $usuario;
        $this->clave = $clave;
    }

    function connect() {
        try {
            $this->db = new PDO($this->databaseType . ":dbname=" . $this->database .
                ";host=" . $this->host, $this->usuario, $this->clave);
            // return $this -> db;
            // $bd = null; //Cerrar conexion
        } catch (PDOException $e) {
            echo "Error en la conexión " . $e->getMessage();
            return false;
        }
    }

    function query($query) {
        try {
            return $this->db->query($query);
        } catch (PDOException $e) {
            echo "Error en la conexión " . $e->getMessage();
            return false;
        }
    }
}
