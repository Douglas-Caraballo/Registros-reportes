<?php

    class ModeloRutas{

        static public function RutasModelos($rutas){
            if($rutas == 'reporte_pc'|| $rutas == 'impresora' || $rutas=="Mac" || $rutas =="desincorporacion"){
                $pagina = 'vistas/modulos/'.$rutas.'.php';
            }elseif($rutas=='index'){
                $pagina = 'vistas/modulos/inicio.php';
            }else{
                $pagina = 'vistas/modulos/404.php';
            }

            return $pagina;
        }

    }