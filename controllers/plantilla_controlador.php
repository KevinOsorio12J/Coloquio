<?php
class ControladorPlantilla{    
    public function ctrIndex(){
        include "vistas/principal.php";
    }
    public function ctrHilerio(){
        include "vistas/hilerio.php";
    }
    public function ctrPedro(){
        include "vistas/PedroTomas.php";
    }
    public function ctrEduardo(){
        include "vistas/Eduardo.php";
    }
    public function ctrMancera(){
        include "vistas/Mancera.php";
    }
    public function ctrOsbeli(){
        include "vistas/Osbeli.php";
    }
    public function ctrCarlos(){
        include "vistas/carlos.php";
    }
    public function ctrEfrain(){
        include "vistas/efrain.php";
    }
    public function ctrDamian(){
        include "vistas/damian.php";
    }
    public function ctrRegistro(){
        include "vistas/registro.php";
    }c function ctrCargarLogin(){
        include "../admin/templates/login.php";
    }
    
}
