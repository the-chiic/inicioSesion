<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link rel="stylesheet" href="views/css/style.css">
        <title>Iniciar sesión</title>
    </head>
    <body>
        <main>
            <form action="index.php?c=C_IniciarSesion&m=iniciarSesion" method="POST">
                <label>Correo</label>
                <input type="text" name="correo" placeholder="tucorreo@ejemplo.com" required/>

                <label>Contraseña</label>
                <input type="password" name="pw" placeholder="••••••••" required/>

                <input type="submit" value="Entrar">
            </form>
        </main>
    </body>
</html>