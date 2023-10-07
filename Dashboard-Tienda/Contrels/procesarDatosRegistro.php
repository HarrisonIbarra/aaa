<?php
// Conexión a la base de datos
$mysqli = new mysqli("localhost", "root", "1023974256", "gpamotors");
$mysqli->set_charset("utf8");

// Verificar la conexión
if ($mysqli->connect_errno) {
    die("Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

// Captura los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombres = $_POST["usuNombre"];
    $apellidos = $_POST["usuApellido"];
    $tipoDocumento = $_POST["usuTipoDocumento"];
    $documento = $_POST["usuDocumento"];
    $telefono = $_POST["usuTelefono"];
    $direccion = $_POST["usuDireccion"];
    $genero = $_POST["usuGenero"];
    $correo = $_POST["usuCorreo"];
    $contrasena = $_POST["usuContrasena"];
    $confirmarContrasena = $_POST["usuConfirmarContrasena"]; // Capturar confirmación de contraseña

    // Comparar las contraseñas
    if ($contrasena !== $confirmarContrasena) {
        echo "Las contraseñas no coinciden. Por favor, inténtalo de nuevo.";
        // Puedes redirigir al usuario a la página de registro nuevamente o mostrar un mensaje de error.
        exit();
    }

    // Encriptar la contraseña utilizando password_hash
    $hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);

    // Preparar una consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO usuarios (usuNombre, usuApellido, usuTipoDocumento, usuDocumento, usuTelefono, usuDireccion, usuGenero, usuCorreo, usuContrasena) VALUES ($nombres, $apellidos, $tipoDocumento, $documento, $telefono, $direccion, $genero, $correo, $hashed_password)";

    // Preparar la declaración
    $stmt = $mysqli->prepare($sql);

    // Verificar si la preparación de la consulta fue exitosa
    if ($stmt) {
        // Vincular los parámetros
        $stmt->bind_param("sssssssss", $nombres, $apellidos, $tipoDocumento, $documento, $telefono, $direccion, $genero, $correo, $hashed_password);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "Datos almacenados correctamente";
            header("Location: ../login.html");
            exit();
        } else {
            echo "Error al almacenar datos: " . $stmt->error;
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $mysqli->error;
    }

    // Cerrar la conexión a la base de datos
    $mysqli->close();
}
?>
