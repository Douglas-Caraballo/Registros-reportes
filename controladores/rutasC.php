<?php

    class RutasControntolador{

        public function Plantillas(){
            include 'vistas/plantilla.php';
        }

        public function Rutas(){
            if(isset($_GET['ruta'])){
                $rutas = $_GET['ruta'];
            }else{
                $rutas = 'index';
            }

            $respuesta = ModeloRutas::RutasModelos($rutas);
            include $respuesta;
        }

    }