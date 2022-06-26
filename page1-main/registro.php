<?php include("db.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="color2.css">
    <script >
        let p1 = document.getElementById("Contraseña").value;
        let p2 = document.getElementById("Contraseña2").value;

        if (p1==p2)
            alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo") 

        else 
      	    alert("Las dos claves son distintas" ) 
}   
    </script>
    <title>Mathematical Space</title>
</head>
<body>
    <div id="contenedor">
  
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Registro
                </div>
                <form id="loginform" action= "save.php" method = "POST">

                    <input type="text" name="Usuario" placeholder="Usuario" required>

                    <input type="password" placeholder="Contraseña" name="Contraseña" id ="Contraseña" required>

                    <input type="password" placeholder="Contraseña" name="Contraseña2" id ="Contraseña2" required>

                    <input type="email" name="Correo" placeholder="Correo" required>

                    <input type="tel" name="telefono" placeholder="Número" required>

                    <input type="date" name="Fechanacimiento" required>

                    <button type="submit" title="Ingresar" name="Ingresar">Registrar</button>
                </form>
                
            </div>
        </div>
    </div>
        
 </body>
 
</body>
</html>