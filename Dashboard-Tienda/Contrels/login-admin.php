<?php
include_once'../Models/conexion.php';

$documento = $_POST['documento'];
$password = $_POST['password'];
$rol = $_POST['Rol'];

$sql = "SELECT * FROM usuarios WHERE usuDocumento = '$documento' AND usuContrasena = '$password' ";
 $result = $mysqli->query($sql);

 if($result->num_rows == 0){
    $mensaje = 'Consulta no valida:'. mysqli_error($mysqli). "\n";
    header("Location: ../index.php");
 }

 while ( $row = mysqli_fetch_assoc($result)){
    if($rol == 1){
        header('location: ../Views/vistas/paginaPrincipal.html');
    }else if($rol == 2 ){
       header("Location: ../Views/Administrador/index.php");
    }else{
        header ("Location: ../login.html");
    }
    echo "Exito";
}
?>
