<?php

// Librerias
require_once ('libs/fpdf.php');


//Controladores
require_once 'controladores/rutasC.php';
require_once 'controladores/reportesC.php';


//Modelos
require_once 'modelos/rutasM.php';
require_once 'modelos/reportesM.php';

$ruta = new RutasControntolador();
$ruta -> Plantillas();