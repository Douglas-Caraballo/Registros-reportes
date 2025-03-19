<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vistas/css/style.css">
    <title>Soporte</title>
</head>
<body class="bodyWrapper">
    <header class="menuWrapper">
        <?php include 'modulos/menu.php'; ?>
    </header>
    <div>
        <?php
            $rutas = new RutasControntolador();
            $rutas -> Rutas();
        ?>
    </div>
</body>
</html>