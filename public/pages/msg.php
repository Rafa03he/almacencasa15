<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/msg.css">
</head>
<body class="msg-body">
    <div class="msg-box">
        <span>
            <?php print "$msg";?>
        </span>
        <a href="../scripts/action.php?action=add" class="no-link">Volver</a>
    </div>
</body>
</html>