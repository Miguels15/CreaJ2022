document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("registro-casa").addEventListener('submit', validarCasa);
});

function validarCasa(validar) {
    validar.preventDefault();
    nomPropiedad = document.getElementById('nombrePropiedad').value;
    if(nomPropiedad.length == 0)
    {
        nomSpan = document.getElementById("propiedadError");
        nomSpan.innerHTML = "Escribe el nombre de tu propiedad!!";
        return ;
    }else{
        document.getElementById("propiedadError").style.display = 'none';
    }

    direcPropiedad = document.getElementById('direccionPropiedad').value;
    if(direcPropiedad.length == 0)
    {
        direccionError = document.getElementById("direccionError");
        direccionError.innerHTML = "Escribe la direccion de tu propiedad!!";
        return ;
    }else{
        document.getElementById("direccionError").style.display = 'none';
    }

    costoPropiedad = document.getElementById('precioPropiedad').value;
    if(costoPropiedad.length == 0)
    {
        precioError = document.getElementById("precioError");
        precioError.innerHTML = "Digita el precio de la propiedad!!";
        return;
    }else{
        document.getElementById("precioError").style.display = 'none';
    }
    
    departamento = document.getElementById("departPropiedad").selectedIndex;
    if(departamento == 0 ) {
        departamento = document.getElementById("depaError");
        departamento.innerHTML = "Es muy importante que selecciones el departamento que se ubica tu propiedad!!";
        return;
    }else{
        document.getElementById("depaError").style.display = 'none';
    }
    
    const input = document.getElementById("text").value;
    if(input.length == 0){
        infoSpan = document.getElementById("descripcionError");
        infoSpan.innerHTML = "Por favor ingresa una breve descripcion de tu propiedad!!";
        return;
    } else {
        document.getElementById("descripcionError").style.display = 'none';
}

   /*infoPropiedad = document.getElementById("descripcion");
    if(infoPropiedad.value.length < 1)
    {
        infoSpan = document.getElementById("descripcionError");
        infoSpan.innerHTML = "Por favor ingresa una breve descripcion de tu propiedad!!";
        return;
    }else{
        document.getElementById("descripcionError").style.display = 'none';
    }*/

    fotoPortada = document.getElementById("imagen").files;
    if(fotoPortada.length == 0)
    {
        fotoSpan = document.getElementById("portadaError");
        fotoSpan.innerHTML = "Por favor suba una foto para la portada de su propiedad!!";
        return;
    }else{
        document.getElementById("portadaError").style.display = 'none';
    }

    fotoMas = document.getElementById("fotos").files;
    if(fotoMas.length == 0)
    {
        fotoVerSpan = document.getElementById("fotosError");
        fotoVerSpan.innerHTML = "Por favor suba una foto para la portada de su propiedad!!";
        return;
    }else{
        document.getElementById("fotosError").style.display = 'none';
    }
    alert("Propiedad registrada exitosamente");
    this.submit();
}