

<?php include("db.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="color2.css">
    <title>Mathematical Space</title>
</head>
<body background="fondo.jpeg">
    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Bienvenido
                </div>
                <form action="index.php" method="POST" id="loginform">
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    
                    <input type="password" placeholder="Contraseña" name="Contraseña" required>
                    
                    <button type="submit" title="Ingresar" name="Ingresar">Entrar</button>
                    <br><br>
                    <li><a href="registro.php">Registrar</a></li>
                </form>
                
            </div>
        </div>
    </div>
        
 </body>
 
</body>
</html>
