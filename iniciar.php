<!DOCTYPE html>
<html lang="en">
<head>
    <title >INICIO DE SESIÓN</title>
</head>
<body>
    <form action="inicio.php" method="POST">INICIAR SESIÓN<br>
    <label for="usuario">Ingresar correo electronico : </label>
    <input type="email" name="usuario" placeholder="Ingresar el correo"><br><br>
    <label for="clave">Ingresar contraseña : </label>
    <input type="password" name="clave" placeholder="Ingresar la contraseña"><br><br>
    <input type="submit" value="Ingresar" name="ingresando"><br>
    </form>
    <form action="pagina1.php" method="POST">
    <input type="submit" value="Abrir pagina 1" name="pagina1">
    </form>
</body>
</html>