<?php
require_once "modelo/Modelo.php";

class Controlador {

    public static function procesar($accion) {
        switch ($accion) {
            case "crear":
                if (Modelo::registrar($_POST)) {
                    header("Location: index.php?action=listar");
                }
                break;

            case "listar":
                $datos = Modelo::listar();
                include "vista/listar.php";
                break;

            case "eliminar":
                if (isset($_GET["id"])) {
                    Modelo::eliminar($_GET["id"]);
                }
                header("Location: index.php?action=listar");
                break;

            case "editar":
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    Modelo::editar($_POST);
                    header("Location: index.php?action=listar");
                } else {
                    $dato = Modelo::obtenerPorId($_GET["id"]); 

                    include "vista/editar.php";
                }
                break;

            case "registrar":
            default:
                include "vista/registrar.php";
                break;
        }
    }
}
?>
