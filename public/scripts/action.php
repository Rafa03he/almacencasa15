<?php
$action = $_GET['action'];
switch ($action) {
    case 'change':
        $title = "Modificar";
        # code...
        break;
    case 'add':
        $title = "Agregar";
        include "../pages/add.php";
        break;
    case 'erase':
        $title = "Eliminar";
        # code...
        break;
}
?>