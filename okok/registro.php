<?php include("loginconect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>

<body bgcolor="purple">
    
    <center>
        <h2><font color="plum">Welcome</font></h2>
        <hr  size="8px" color="black">
    <form action="savelogin.php" method="POST">
        <div>
            <tr>
                <th scope="row"><h3><font color="plum">Email</font></h3></th>
                <td>
                    <span class="cnt">
                        <input name="Email" type="email" value="" size="20">
                </span>
                </td>
            </tr>
            <tr>
                <th height="33" scope="row"><h3><font color="plum">Contraseña</font></h3></th>
                <td>
                    <span class="cnt">
                        <input name="Contraseña" type="password" class="input" value="" size="20">
                    </span>
                </td>
            </tr>
            <tr>
                <th height="33" scope="row"><h3><font color="plum">Usuario</font></h3></th>
                <td>
                    <span class="cnt">
                        <input name="Usuario" type="text" class="input" value="" size="20">
                    </span>
                </td>
            </tr>
            <tr>
                <th height="33" scope="row"><h3><font color="plum">telefono</font></h3></th>
                <td>
                    <span class="cnt">
                        <input name="telefono" type="int" class="input" value="" size="20">
                    </span>
                </td>
            </tr>
            <tr>
                <th height="33" scope="row"><h3><font color="plum">Fecha de nacimiento</font></h3></th>
                <td>
                    <span class="cnt">
                        <input name="fechanacimiento" type="date" class="input" value="" size="20">
                    </span>
                </td>
            </tr>
            <br><br>
            <td>
                <span class="cnt">
                <button name="savebutton">Rgistrar</button>
                
            </td>
            <tr>
                <th scope="row">
                    
                    <input type="reset" name="Borrar" id="Borrar" value="reset" class="boton">
                </th>
            </tr>
        </div>
    </form>
</center>
</body>
</html>