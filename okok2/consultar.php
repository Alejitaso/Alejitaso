<?php
include('loginconect.php');


if  (isset($_POST['savebutton'])) {
    $Usuario = $_POST['Usuario'];
    $contraseña = $_POST['Contraseña'];
    echo $Usuario;
    echo $contraseña;
    $query = "SELECT * FROM logindate WHERE USUARIO='$Usuario' AND CONTRASEÑA = '$contraseña'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        
        echo 'Consulta Correcta';
    }else{
        echo 'Registro no hallado';
    }
  }

  
  
?>