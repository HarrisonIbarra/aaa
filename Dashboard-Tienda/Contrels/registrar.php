<?php
$usuNombre=isset($_POST['usuNombre']) ? $_POST['usuNombre'] : '';
$usuApellido=isset($_POST['usuApellido']) ? $_POST['usuApellido'] : '';
$usuTipoDocumento=isset($_POST['usuTipoDocumento']) ? $_POST['usuTipoDocumento'] : '';
$usuDocumento=isset($_POST['usuDocumento']) ? $_POST['usuDocumento'] : '';
$usuTelefono=isset($_POST['usuTelefono']) ? $_POST['usuTelefono'] : '';
$usuCorreo=isset($_POST['usuCorreo']) ? $_POST['usuCorreo'] : '';
$usuDireccion=isset($_POST['usuDireccion']) ? $_POST['usuDireccion'] : '';
$usuGenero=isset($_POST['usuGenero']) ? $_POST['usuGenero'] : '';
$idCiudad=isset($_POST['idCiudad']) ? $_POST['idCiudad'] : '';
$usuContrasena=isset($_POST['usuContrasena']) ? $_POST['usuContrasena'] : '';

try{
    $conexion = new PDO('mysql:host=localhost; port=3306; dbname=gpamotors;', 'root', '1023974256');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

    $pdo = $conexion->prepare('INSERT INTO usuarios (usuNombre,usuApellido,usuTipoDocumento,usuDocumento,usuTelefono,usuCorreo,usuDireccion,usuGenero,usuContrasena)
    values (:usuNombre,:usuApellido,:usuTipoDocumento,:usuDocumento,:usuTelefono,:usuCorreo,:usuDireccion,:usuGenero,:usuContrasena)');
    
    $pdo->bindParam(':usuNombre',$usuNombre);
    $pdo->bindParam(':usuApellido',$usuApellido);
    $pdo->bindParam(':usuTipoDocumento',$usuTipoDocumento);
    $pdo->bindParam(':usuDocumento',$usuDocumento);
    $pdo->bindParam(':usuTelefono',$usuTelefono);
    $pdo->bindParam(':usuCorreo',$usuCorreo);
    $pdo->bindParam(':usuDireccion',$usuDireccion);
    $pdo->bindParam(':usuGenero',$usuGenero);
    $pdo->bindParam(':usuContrasena',$usuContrasena);
    $pdo->execute();

    echo json_encode('true');
    
}catch(PDOException $error){
    echo "Error: ".$e->getMessage();
    die();
}