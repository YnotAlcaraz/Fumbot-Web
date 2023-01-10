<?php
include("con_db.php");

if(isset($_POST['submit'])){
    if(strlen($_POST['email']) > 1 &&
    strlen($_POST['descripcion']) > 1){
        $email = trim($_POST['email']);
        $tipo = $_POST['tipo'];
        $descripcion = trim($_POST['descripcion']);
        $consulta = "INSERT INTO registros(Email, Tipo, Descripcion) VALUES ('$email', '$tipo', '$descripcion')";
        $resultado = mysqli_query($conex,$consulta);
    } 
}

?>