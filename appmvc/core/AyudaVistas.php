<?php
class AyudaVistas{
    //toma las constantes de global.php y concatena
    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        $urlString="index.php?controller=".$controlador."&action=".$accion;
        return $urlString;
    }
    
    //Helpers para las vistas
}
?>
