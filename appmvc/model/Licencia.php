<?php
class Licencia extends EntidadBase{
    private int $id;
    private string $tipo;
    
	
    public function __construct() {
        $table="licencia";
        parent::__construct($table);
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }
    
    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function alta(){
        $query="INSERT INTO interes (licenciaId,usuarioId,categoriaId,tipo)
                VALUES(NULL,
                       '".$this->id."',
                       '".$this->tipo."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
    
    public function modificar(){
        $query= "UPDATE licencia set tipo = '$this->tipo'  where licenciaId = $this->tipo";//que va en $this->nombre
        
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    
    }
    
    public function eliminar(){
        $query= "DELETE interes  where id = $this->id";
        
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    
    }

}
?>