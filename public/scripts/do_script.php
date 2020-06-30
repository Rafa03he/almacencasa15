<?php
$do = $_GET['do'];
switch ($do) {
    case 'add':
        $tipo = $_GET['type'];
        $producto = $_GET['nombre'];
        $precio = $_GET['precio'];
        include "connect.php";
        $conn = Connect('products');
        $conn->query("INSERT INTO `$tipo`(`Producto`, `Precio`) VALUES ('$producto', $precio)");
        $msg = "El producto '$producto' ha sido agregado.";
        include "../pages/msg.php";
        break;
    
    default:
        break;
}
