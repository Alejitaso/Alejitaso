<?php include("loginconect.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body bgcolor="purple">
    
    <center>
        <h2><font color="plum">Welcome</font></h2>
        <hr  size="8px" color="black">
    <form >
        <div>
            <tr>
                <th scope="row"><h3><font color="plum">Correo</font></h3></th>
                <td>
                    <span class="cnt">
                        <input name="correo" type="text" value="" size="20">
                </span>
                </td>
            </tr>
            <tr>
                <th height="33" scope="row"><h3><font color="plum">Contraseña</font></h3></th>
                <td>
                    <span class="cnt">
                        <input name="password" type="password" class="input" value="" size="20">
                    </span>
                </td>
            </tr>
            <br><br>
            <td>
                <span class="cnt">
                    <input value="Entrar" name="Entrar" target="_parent" onclick="login()" type="button" class="boton">
                </span>
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