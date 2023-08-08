<?php
class DatosPersonales extends EntidadBase{
    private int $id;
    private string $nombre;
    private string $apellido;
    private string $sexo;
    private string $foto;
   
    public function __construct() {
        $table="DatosPersonales";
        $primarykey="id";
        parent::__construct($table,$primarykey);
    }

 }
?>