<?php

    require_once "./config/applicazione.php";
    require_once "./autoload.php";

    /*---------- Iniciando sesion ----------*/
    require_once "./app/views/inc/inizia_sessione.php";


    if(isset($_GET['views'])){
        $url=explode("/", $_GET['views']);
    }else{
        $url=["principale"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "./app/views/inc/testa.php"; ?>
</head>
<body>
    <?php
        use app\controllers\vistaControllore;

        $vistaControllore = new vistaControllore();
        $vista=$vistaControllore->obtenerVistasControlador($url[0]);

        if($vista=="principale" || $vista=="404"){
            require_once "./app/views/content/".$vista."-vista.php";
        }else{
            /*inutilizado por el momento cfcff # Cerrar sesion #
            if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
                $insLogin->cerrarSesionControlador();
                exit();
            }*/

            require_once $vista;
        }

        require_once "./app/views/inc/script.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>