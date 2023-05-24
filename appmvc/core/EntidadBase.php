<?php
class EntidadBase
{
    private $table;
    private static $db;
    //private $conectar;

    public function __construct($table)
    {
        $this->table = (string) $table;
        require_once 'Conectar.php';
        $conectar = new Conectar();
        self::$db = $conectar->getConnection();
    }


    public function db()
    {
        return self::$db;
    }

    public function getAll()
    {
        $query = $this->db()->query("SELECT * FROM $this->table ORDER BY id DESC");

        while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }

    public function getById($id)
    {
        $query = $this->db()->query("SELECT * FROM $this->table WHERE id=$id");
        //Obtiene una fila de datos del conjunto de resultados y la devuelve como un objeto, donde cada propiedad representa el nombre de la columna del conjunto de resultados
        if ($row = $query->fetch_object()) {
            $resultSet = $row;
        }

        return $resultSet;
    }

    public function getBy($column, $value)
    {
        $query = $this->db()->query("SELECT * FROM $this->table WHERE $column='$value'");

        while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }

    public function deleteById($id)
    {
        $query = $this->db()->query("DELETE FROM $this->table WHERE id=$id");
        return $query;
    }

    public function deleteBy($column, $value)
    {
        $query = $this->db()->query("DELETE FROM $this->table WHERE $column='$value'");
        return $query;
    }

    /*
     * Aqui podemos agregar otros métodos que nos ayuden
     * a hacer operaciones con la base de datos de la entidad
     */

}
?>