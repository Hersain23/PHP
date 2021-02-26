<!DOCTYPE html>
    <html>
    <head>
        <title>Envio de Formularios con PHP </title>
        <meta charset="utf-8">
    </head>
<body>
        <form name="envio-datos-get" action="Envio-Datos.php" method="get" enctype="application/x-www-form-urlencoded">
            <label>Nombre</label>
            <input type="text" name="nombre">
            <br><br>
            <label>Password</label>
            <input type="password" name="password">
            <br><br>
            <input type="submit" name="enviar" value="Envio-GET">
        </form>
        <br><br>    
        <form name="envio-datos-post" action="Envio-Datos.php" method="post" enctype="application/x-www-form-urlencoded">
            <label>Nombre</label>
            <input type="text" name="nombre">
            <br><br>
            <label>Password</label>
            <input type="password" name="password">
            <br><br>
            <input type="submit" name="enviar" value="Envio-POST">
        </form>
</body>
</html>