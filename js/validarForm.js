document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("registro").addEventListener('submit', validarRegistro);
});

function validarRegistro(validar){
    validar.preventDefault();
    var nom = document.getElementById('nombre').value;
    if (nom == /^[A-Z]+$/i) 
    {
        alert('Solo se puede introducir letras');
        return;
    }else{
        if(nom.length == 0)
        {
            alert('No puedes dejar el nombre vacio');

            return;
        }
    }

    var mailOnline = document.getElementById('mail').value;
    if(!/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(mailOnline))
    {
        alert('Debes ingresar un correo electronico valido');
        return;
    }

    user = document.getElementById("usuario").value;
    if( user == null || user.length == 0 || /^\s+$/.test(user) ) {
        alert('Debe ingresar un nombre de usuario');
            return;
    }

    tel = document.getElementById("telefono").value;
    if( !(/^\+\d{2,3}\s\d{8}$/.test(tel)) ) {
        alert('Su numero de telefono debe tener prefijo internacional ejemplo: +503 80502165 o +34 14692521 ');
        return;
    }
    
  
    pass = document.getElementById("contra").value;
    if( pass == null || pass.length == 0 || /^\s+$/.test(pass) ) {
        alert('Debe una ingresar una contraseña');
            return;
    }

    genero = document.getElementById("generos").selectedIndex;
    if(genero == null || genero == 0 ) {
        alert('Especifique su genero')
        return;
    }
    alert("Registro exitoso");
    this.submit();
}
