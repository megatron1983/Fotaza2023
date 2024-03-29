<?php
class Conectar
{
    private $driver;
    private $host, $user, $pass, $database, $charset;
    private static $con;

    public function __construct()
    {

        $dbConfig = require 'config/database.php';
        $this->driver = $dbConfig["driver"];
        $this->host = $dbConfig["host"];
        $this->user = $dbConfig["user"];
        $this->pass = $dbConfig["pass"];
        $this->database = $dbConfig["database"];
        $this->charset = $dbConfig["charset"];
    }

    public function getConnection()
    {

        // Si la variable $con esta vacia entra a la funcion
        if (!isset(self::$con)) {
            $con = new mysqli($this->host, $this->user, $this->pass, $this->database);
            //Es necesario para enviar datos al servidor que no pueden ser representados en ASCII puro, como 'ñ' o 'á'.
            $con->query("SET NAMES '" . $this->charset . "'");

            //implementar los controles necesarios para comprobar la conexión exitosa

            //Hace referencia a la clase actual y generalmente lo usarías cuando no se genera una instancia de la misma, como cuando usas métodos estáticos:
            self::$con = $con;
        }
        return self::$con;
    }

    // tarea!! implementar cerrar la conexión
    public function closeConection()
    {
        self::$con->close();
    }

    public function __destruct()
    {
        if (isset(self::$con))
            self::$con->close();
    }
}
?>