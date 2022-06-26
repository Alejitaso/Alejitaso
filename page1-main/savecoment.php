<?php
include('db.php');
if (isset($_POST['Comentar'])) {
    $IDC = uniqid('', true);
    $comentario = $_POST['comentario'];
    $Usuario = $_POST['Usuario'];
        $query = "INSERT INTO Comentarios VALUES('$IDC', '$comentario', '$Usuario')";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("Query Failed.");
        }

        header ('location: index.php');

}
?>