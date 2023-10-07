document.getElementById('formulario').addEventListener('submit', function(e){
    e.preventDefault();

    let formulario = new FormData(document.getElementById('formulario'));
    fetch('registrar.php',{
        method: 'POST',
        body : formulario
    })
    .then(res => res.json())
    .then(data => {
        if (data =='true'){
            document.getElementById('usuNombre').value = '';   
            document.getElementById('usuApellido').value = '';
            document.getElementById('usuTipoDocumento').value = '';
            document.getElementById('usuDocumento').value = '';  
            document.getElementById('usuTelefono').value = ''; 
            document.getElementById('usuCorreo').value = '';
            document.getElementById('usuDireccion').value = ''; 
            document.getElementById('usuGenero').value = '';
            document.getElementById('idCiudad').value = ''; 
            document.getElementById('usuContrasena').value = ''; 
            alert('Empleado registrado correctamente');
            }else{
                console.log(data);
            }
    })
});
// usuNombre
// usuApellido
// usuTipoDocumento
// usuDocumento
// usuTelefono
// usuCorreo
// usuDireccion
// idCiudad
// usuContrasena