<?php
class Interes extends EntidadBase{
    private int $interesId;
    private int $usuarioId;
    private int $categoriaId;
	
    public function __construct() {
        $table="interes";
        parent::__construct($table);
    }
    
    public function getId() {
        return $this->interesId;
    }

    public function setId($id) {
        $this->interesId = $id;
    }
    
    public function getUsuarioId() {
        return $this->usuarioId;
    }

    public function setUsuarioId($usuarioId) {
        $this->usuarioId = $usuarioId;
    }

    public function getCategoriaId() {
      return $this->categoriaId;
  }

  public function setCategoriaId($categoriaId) {
      $this->categoriaId = $categoriaId;
  }

  public function alta(){
    $query="INSERT INTO interes (interesId,usuarioId,categoriaId)
            VALUES(NULL,
                   '".$this->usuarioId."',
                   '".$this->categoriaId."');";
    $save=$this->db()->query($query);
    //$this->db()->error;
    return $save;
}

public function modificar(){
    $query= "UPDATE interes set interesId = '$this->interesId'  where id = $this->interesId";
    
    $save=$this->db()->query($query);
    //$this->db()->error;
    return $save;

}

public function eliminar(){
    $query= "DELETE interes  where interesId = $this->interesId";
    
    $save=$this->db()->query($query);
    //$this->db()->error;
    return $save;

}


}
?>