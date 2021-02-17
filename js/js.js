function validar(){

    var nombre = document.getElementById("nombre");
    var apellidos = document.getElementById("apellidos");
    var edad = document.getElementById("edad");
    var email = document.getElementById("email");
    var contrasena = document.getElementById("contrasena");
    var tipoCuenta = document.getElementById("tipoCuenta");
    var foto = document.getElementById("foto");

    var correcto = true;

    if (nombre.value == ""){
        nombre.style.backgroundColor = "red";
        correcto = false;
    } else {
        nombre.style.backgroundColor = "white";
    }
    if(apellidos.value == ""){
        apellidos.style.backgroundColor = "red";
        correcto = false;
    } else{
        apellidos.style.backgroundColor = "white";
    }
    if(edad.value == ""){
        edad.style.backgroundColor = "red";
        correcto = false;
    } else{
        edad.style.backgroundColor = "white";
    }
    if(email.value == ""){
        email.style.backgroundColor = "red";
        correcto = false;
    } else {
        email.style.backgroundColor = "white";
    }
    if(contrasena.value == ""){
        contrasena.style.backgroundColor = "red";
        correcto = false;
    } else {
        contrasena.style.backgroundColor = "white";
    }
    if(tipoCuenta.value == ""){
        tipoCuenta.style.backgroundColor = "red";
        correcto = false;
    } else {
        tipoCuenta.style.backgroundColor = "white";
    }
    if(foto.value == ""){
        foto.style.backgroundColor = "red";
        correcto = false;
    } else {
        foto.style.backgroundColor = "white";
    }
    alert(nombre)

    if(correcto){
       document.getElementById("form").submit();
    } else {
        alert("Debes introducir todos los datos que se piden");
    }

}