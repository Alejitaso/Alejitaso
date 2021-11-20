<?php
include('loginconect.php');
if (isset($_POST['savebutton'])) {
    $Email = $_POST['Email'];
    $contraseña = $_POST['Contraseña'];
    $Usuario = $_POST['Usuario'];
    $telefono = $_POST['telefono'];
    $fechanacimiento = $_POST['fechanacimiento'];
    $query = "INSERT INTO logindate VALUES('$Email', '$contraseña', '$Usuario', '$telefono', '$fechanacimiento')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    }

    header('location: index.php');

}
?>