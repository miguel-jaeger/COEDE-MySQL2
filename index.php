<?php
require_once "controlador/Controlador.php";

$accion = isset($_GET["action"]) ? $_GET["action"] : "registrar";
Controlador::procesar($accion);
?>
