<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="stylesheet" href="views/css/style.css">
        <title>Menú</title>
    </head>
    <body>
        <main>
            <h2>Bienvenido, <?php echo $usuario; ?></h2>
            <a href="index.php?c=C_IniciarSesion&m=cerrarSesion">
                <input type="button" value="Cerrar Sesión">
            </a>
        </main>
    </body>
</html>