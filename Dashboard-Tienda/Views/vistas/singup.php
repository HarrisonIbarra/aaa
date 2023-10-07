<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="singup.css" />
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Registro</title>
</head>

<body>
  <div class="container">
        <img class="fondo" src="Views/imagenes/logo3.png" alt="moto">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h1>REGISTRO</h1>
                    <div class="card-content">
                        <form method="post" action="/Contrels/procesarDatosRegistro.php" >

                          <!-- Campo nombre -->
                        <label for="">Nombres:</label><br>
                        <input type="text" placeholder="Ingrese su nombre" name="nombres" id="nombres"><br>
                        
                        <!-- campo apellido -->
                        <label for="">Apellidos:</label><br>
                        <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellidos"><br>
                        
                        <!-- Campo tipo documento -->
                        <label for="">Tipo de documento:</label><br>
                         <select name="tipoDocumento" id="tipoDocumento"><br>
                            <option value="">Seleccione</option>
                            <option value="1">C.C</option>
                            <option value="2">Pasaporte</option>
                         </select><br>
                         
                         <!-- Campo numero de identificacion -->
                        <label for="">Numero de documento:</label><br>
                        <input type="text" name="documento" id="documento" 
                        pattern="[0-9]{4}-[0-9]{6}" maxlength="10" placeholder="Numero de documento"><br>

                        <!-- campo numero telefonico -->
                        <label for="">Telefono:</label><br> 
                        <input type="tel" name="telefono" id="telefono" pattern="[0-9]{4}-[0-9]{6}" maxlength="10"/ placeholder="Telefono o Celular"><br>

                        <!-- campo direccion -->
                        <label for="">Direccion:</label><br>
                        <input type="text" name="direccion" id="direccion" placeholder="Direccion"><br>
                        
                         <!-- Campos ciudad -->
                        <label for="">Ciudad:</label><br>
                        <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad"><br>
                        
                         <!-- Campos genero -->
                         <label for="">Genero:</label><br>
                         <select name="genero" id="genero"><br>
                            <option value="">Seleccione</option>
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
                         </select><br>
                         
                          <!-- Campos correo electronico -->
                         <label for="">Correo electronico:</label><br>
                        <input type="email" name="email" id="email" placeholder="Correo electronico"><br>

                         <!-- campo contraseña -->
                         <label for="">Password:</label><br>
                         <input type="password" name="password" id="password" placeholder="Contraseña"><br>

                         <!-- Campo Rol -->
                        <label for="">Rol:</label><br>
                         <select name="rol" id="rol"><br>
                            <option value="">Seleccione</option>
                            <option value="1">Cliente</option>
                            <option value="2">Administrador</option>
                         </select><br>
                         
                          <!-- Boton registrar usuario -->
                         <button type="submit">Registrarme</button>
                         </form>
                    </div>
                </div>
            </div>         
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>