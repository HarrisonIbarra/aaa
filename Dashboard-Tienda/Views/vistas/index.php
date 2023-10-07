<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/index.css">
    <<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>ACCESS</title>
</head>
<body>
    <div class="container">
        <img class="fondo" src="../imagenes/logo3.png" alt="moto">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card">
                    <h1>INICIAR SESIÓN</h1>
                    <div class="card-content">
                        <form action="../../Contrels/login-admin.php" method="post">
                        <label for="">Numero de documento:</label><br>
                        <input type="text" name="documento" id="documento"><br> 
                         <label for="">Password:</label><br>
                         <input type="password" name="password" id="password" ><br>
                         <label for="">Seleccione el rol:</label><br>
                         <select name="Rol" id=""><br>
                            <option value="1">Cliente</option>
                            <option value="2">Administrador</option>
                         </select><br>
                         <button type="submit">Ingresar</button><br>
                         <a href="">¿Olvidaste tu contraseña?</a><br>
                         <a href="formularioPrueba.html">Registarme</a>
                         </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>