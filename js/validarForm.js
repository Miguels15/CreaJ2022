document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("registro").addEventListener('submit', validarRegistro);
});

function validarRegistro(validar){
    validar.preventDefault();
    var nom = document.getElementById('nombre').value;
    if (nom == /^[A-Z]+$/i) 
    {
        alert('Solo se puede introducir letras');
        return false;
    }else{
        if(nom.length == 0)
        {
            alert('El nombre no puede quedar vacio');
            return false;
        }
    }

    var mailOnline = document.getElementById('mail').value;
    if(!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(mailOnline))
    {
        alert('Debes ingresar un correo electronico valido');
        return false;
    }

    user = document.getElementById("usuario").value;
    if( user == null || user.length == 0 || /^\s+$/.test(user) ) {
        alert('Debe ingresar un nombre de usuario');
            return false;
    }

    tel = document.getElementById("telefono").value;
    if( !(/^\+\d{2,3}\s\d{8}$/.test(tel)) ) {
        alert('Su numero de telefono debe tener prefijo internacional ejemplo: +503 80502165 o +34 14692521 ');
        return false;
    }
    
  
    pass = document.getElementById("contra").value;
    if( pass == null || pass.length == 0 || /^\s+$/.test(pass) ) {
        alert('Debe una ingresar una contraseña');
            return false;
    }

    genero = document.getElementById("generos").selectedIndex;
    if( genero == null || genero == 0 ) {
        alert('Especifique su genero')
        return false;
    }else{
        alert("Registro exitoso");
        this.submit(registro);
    }

}
