<?php
include("db.php");

if (isset($_GET['Ingresar'])){
    $Usuario = $_GET['Usuario'];
    $Contraseña = $_GET['Contraseña'];
    $query = "SELECT * FROM usuarios where Usuario=$Usuario AND Contraseña = '$Contraseña'";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result)==1){
        if ($Contraseña==$row['Contraseña']){
            echo 'Usuario valido';
        }else{
            echo 'no consulto';
        }
    }
}
?>