<?php
class Publicacion extends EntidadBase
{
  private int $id;
  private int $usuarioId;
  private int $categoriaId;
  private int $licenciaId;
  private string $fechaDePublicacion;
  private string $titulo;
  private string $imagen;
  private string $etiqueta1;
  private string $etiqueta2;
  private string $etiqueta3;
  private bool $estado;
  private bool $publica;

  public function __construct()
  {
    $table = "publicacion";
    parent::__construct($table);
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getUsuarioId()
  {
    return $this->usuarioId;
  }

  public function setUsuarioId($usuarioId)
  {
    $this->usuarioId = $usuarioId;
  }

  public function getCategoriaId()
  {
    return $this->categoriaId;
  }

  public function setCtaegoriaId($categoriaId)
  {
    $this->categoriaId = $categoriaId;
  }

  public function getLicenciaId()
  {
    return $this->licenciaId;
  }

  public function setLicenciaId($licenciaId)
  {
    $this->licenciaId = $licenciaId;
  }

  public function getFechaDePublicacionId()
  {
    return $this->fechaDePublicacion;
  }

  public function setFechaDePublicacionId($fechaDePublicacion)
  {
    $this->fechaDePublicacion = $fechaDePublicacion;
  }

  public function getTituloId()
  {
    return $this->titulo;
  }

  public function setTituloId($titulo)
  {
    $this->titulo = $titulo;
  }


  public function getImagen()
  {
    return $this->imagen;
  }

  public function setImagen($imagen)
  {
    $this->imagen = $imagen;
  }


  public function getEtiqueta1()
  {
    return $this->etiqueta1;
  }

  public function setEtiqueta1($etiqueta1)
  {
    $this->etiqueta1 = $etiqueta1;
  }

  public function getEtiqueta2()
  {
    return $this->etiqueta2;
  }

  public function setEtiqueta2($etiqueta2)
  {
    $this->etiqueta2 = $etiqueta2;
  }

  public function getEtiqueta3()
  {
    return $this->etiqueta3;
  }

  public function setEtiqueta3($etiqueta3)
  {
    $this->etiqueta3 = $etiqueta3;
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setEstado($estado)
  {
    $this->estado = $estado;
  }

  public function getPublica()
  {
    return $this->publica;
  }

  public function setPublica($publica)
  {
    $this->publica = $publica;
  }

  public function alta()
  {
    $query = "INSERT INTO publicacion (id,usuarioId,categoriId,licenciaId,titulo,imagen,etiqueta1,etiqueta2,etiqueta3,estado,publica)
          VALUES(NULL,
               '" . $this->usuarioId . "',
						   '" . $this->categoriaId . "',
						   '" . $this->licenciaId . "',
						   
               '" . $this->titulo . "',
               '" . $this->imagen . "',
						   
						   '" . $this->etiqueta1 . "',
						   '" . $this->etiqueta2 . "',
               '" . $this->etiqueta3 . "',
               '" . $this->estado . "',
               '" . $this->publica . "');";
    $save = $this->db()->query($query);
    //$this->db()->error;
    return $save;
  }

  // modificar(['titulo'=>'NEUVO TITULO PENDEJO!','descripcion'=>'NUEVA DESC WACHIN!'])
  public function modificar($datosACambiar)
  {
    $lastKey = array_key_last($datosACambiar);
    $query = "UPDATE publicacion set ";
    foreach ($datosACambiar as $id_assoc => $value) {
      if ($id_assoc != $lastKey)
        $query += "$id_assoc = $value,";
      else
        $query += "$id_assoc = $value";
    };
    $query += " where id = $this->id"; 
    $save = $this->db()->query($query);
    // $this->db()->error;
    return $save;

  }

  public function eliminar()
  {
    $query = "DELETE publicacion  where id = $this->id";

    $save = $this->db()->query($query);
    //$this->db()->error;
    return $save;

  }


}
?>