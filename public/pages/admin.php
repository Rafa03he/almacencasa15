<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventana de administrador</title>
    <link rel="stylesheet" href="../css/manage.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="login-body">
    <div class="top-box content-box">
        <h1 class="top-box__title">Administración de Productos</h1>
        <form action="" method="get">
            <span>Tipo: </span>
            <select name="type">
                <option value="gaseosas">Gaseosas</option>
            </select>
            <input type="submit" value="Actualizar">
        </form>
    </div>
    <a href="index.html">Cerrar Sesión</a>
<?php
include "../scripts/connect.php";
$conn = Connect("products");
if ($conn) {
    $table = $conn->query("SELECT*FROM `gaseosas`");
?>
    <form action="../scripts/action.php" method="get" class="content-box">
        <span>Acciones: </span>
        <select name="action" id="">
            <option value="change">Modificar</option>
            <option value="add">Agregar</option>
            <option value="erase">Eliminar</option>
        </select>
        <input type="submit" value="Ir">
    </form>
    <br>
    <div class="table-box">
            <?php
            foreach ($table as $row) {
            ?>
            <div class="table__row">
                    <?php 
                    echo "
                        <div class='table__item id'>$row[id]</div>
                        <div class='table__item nombre'>$row[Producto]</div>
                        <div class='table__item precio'>$row[Precio]</div>
                        ";
                    ?>
            </div>
            <?php
            }
            ?>
    </div>
<?php
} else {
    //otra cosa
}
?>
</body>
</html>