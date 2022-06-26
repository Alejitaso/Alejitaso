<?php
include('db.php');
if (isset($_POST['Ingresar'])) {
    $Usuario = $_POST['Usuario'];
    $Contraseña = $_POST['Contraseña'];
    $contraseña = $_POST['Contraseña2'];
    if ($contraseña==$Contraseña){
        $Correo = $_POST['Correo'];
        $Numero = $_POST['telefono'];
        $Fechanacimiento = $_POST['Fechanacimiento'];
        $query = "INSERT INTO usuarios VALUES('$Usuario', '$Contraseña', '$Correo', '$Numero', '$Fechanacimiento')";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("Query Failed.");
        }
    
        header('location: login.php');
    }else{
        header('location: registro.php');

        echo ('Las claves no coinciden');
    }

  

}
?>