<?php include("db.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="color1.css">
    <title>Mathematical Space</title>
</head>
<body >
    <nav class="navegacion">
        <ul class="menu">

            <li><a href="index.php">Inicio</a></li>
            <li><a href="multiplicaciones.html">Multiplicaciones</a></li>
            <li><a href="Trucos.html">Trucos para multiplicar</a></li>
            <li><a href="galeria.html">Galeria</a></li>
            <li><a href="juego.html">Juego</a></li>
            <li><a href="#">Mas contenido</a>
                <ul class="submenu">
                    
                    

                    <li><a href="quienes.html">Quienes somos</a></li>
                </ul>
            </li>
            <li><a href="login.php">Cerrar Sesíon</a></li>
        </ul>
    </nav>

<section class="cuadro">
    <h3>¿Qué es Mathematical Space?</h3>
    <p>
        Esta es una página web, la cual busca enseñar a los niños de tercer grado de la Insititucion Educativa Hector Abad Gomez.<br>
      La multiplicaciones ya que estos presentan grandes falencias en el area de matematicas, esto debido al poco interes dado hacia esta tematica en especifico 
    </p>
    <h3>¿Qué contiene esta página?</h3>
    <p>
        En esta página web encontraremos dos pestañas esenciales y 4 sub pestañas, las cuales son: <br>
        <br>

        <br><FONT color="plum">INICIO:</FONT></br> En esta encontraras lo basico de la página, una breve explicacion de su objetivo<br>
        y su contenido<br>

        <br><FONT color="plum">MAS CONTENIDO:</FONT></br> Esta es un menu desplegable, el cual cuenta con cuatro submenus, los cuales son:<br>
        la galeria, la cual almacenra imagenes del proceso de desarrollo del programa.<br>
        Quienes somos, aqui habra informacion sobre nosotros, los elaboradores del proyecto.<br>
        Login y Registro, aqui el usuario ingresara su informacion, la cual sera almacenada en una base de datos.<br>
        Y por ulitmo el contacenos, aqui el usuario nos enviara un email con su informacion y dudas que busque resolver.<br>

        <br>
        <br>
        <br>
    
     <div id="formulario">
            <form action="savecoment.php" method="POST">
                <label><FONT color="plum">Usuario:</FONT></label><br>
                <input type="text" class="campo" name="Usuario"><br>

                <label><FONT color="plum">Comentario:</FONT></label><br>
                <input type="text" class="campo" name="comentario"><br>

                <br>

                <button type="submit" value="Comentar" class="boton" name="Comentar"><FONT color="purple">Comentar</FONT></button>

        
            </form>
        </div>         
    
    
    
    
    
        
    </p>
    <div class="suma"> <img src="suma.png" width="300" height="300" ></div>
    <div class="divicion"> <img src="divicion.png" width="300" height="300" ></div>
    <div class="multi"> <img src="multi.png" width="300" height="300" ></div>
    <div class="resta"> <img src="resta.png" width="300" height="300" ></div>
   


</section>

</body>

</html>
