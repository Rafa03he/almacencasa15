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
    <form action="do_script.php" method="get" class="login-form content-box">
        <h1 class="form__item"><?php print "$title";?></h1>
        <input type="text" name="do" id="" hidden value="add">
        <select name="type" class="form__item hundred">
            <option value=""></option>
            <option value="gaseosas">Gaseosas</option>
        </select>
        <input class="form__item hundred" type="text" name="nombre" placeholder="Nombre del producto...">
        <input class="form__item hundred" type="number" name="precio" placeholder="Precio...">
        <input class="form__item hundred" type="submit" value="<?php print "$title";?>">
    </form>
</body>
</html>