<?php
class DB {
    static private PDO $db;

    function __construct() {
        self::connect();
    }

    /**
     * Funcion para conectarse a la DB leyendo los datos necesarios de un fichero JSON.
     */
    static function connect() {
        $jsonPath = __DIR__ . "/../config/config.json";
        $json = json_decode(file_get_contents($jsonPath), TRUE);

        $connectionString = "mysql:dbname=" . $json['database'] . ";host=" . $json['host'];
        $user = $json['username'];
        $password = $json['password'];

        try {
            self::$db = new PDO($connectionString, $user, $password);
        } catch (PDOException $e) {
            echo "Error en la conexion " . $e->getMessage();
            self::$db = null;
        } catch (Exception $ex) {
            echo "Error general " . $ex->getMessage();
        }
    }

    /**
     * Funcion que prepara una ejecucion y devuelve el resultado.
     */
    static function prepare($query, $values = array()) {
        // Nos conectamos a la DB y preparamos la ejecucion.
        self::connect();
        $statement = self::$db->prepare($query);

        // Si la ejecucion tuvo exito, devolver todos los resultados. Sino devolver false.
        return $statement->execute($values) ? $statement->fetchAll(PDO::FETCH_ASSOC) : false;
    }
}
