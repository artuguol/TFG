function validar(){

    var nombre = document.getElementById("nombre");
    var apellidos = document.getElementById("apellidos");
    var edad = document.getElementById("edad");
    var email = document.getElementById("email");
    var contrasena = document.getElementById("contrasena");
    var tipoCuenta = document.getElementById("tipoCuenta");
    //var foto = document.getElementById("foto");

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
    }/*
    if(foto.value == ""){
        foto.style.backgroundColor = "red";
        correcto = false;
    } else {
        foto.style.backgroundColor = "white";
    }*/
    alert(nombre)

    if(correcto){
       document.getElementById("form").submit();
    } else {
        alert("Debes introducir todos los datos que se piden");
    }

}

function ajax() {
    try {
        req = new XMLHttpRequest();
    } catch(err1) {
        try {
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (err2) {
            try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (err3) {
                req = false;
            }
        }
    }
    return req;
}

var borrar = new ajax();
function borrarUsuario(id) {

    if(confirm("¿Seguro que deseas eliminar el usuario de la BD?")) {
        var myurl = 'llamadas/borrarUsuario.php';
        myRand = parseInt(Math.random() * 999999999999999);
        modurl = myurl + '?rand=' + myRand + '&id=' + id;
        borrar.open("GET", modurl, true);
        borrar.onreadystatechange = borrarUsuarioResponse;
        borrar.send(null);
    }

}

function borrarUsuarioResponse() {

    if (borrar.readyState == 4) {
        if(borrar.status == 200) {

            var listaUsuarios = borrar.responseText;
            //document.getElementsByClassName('lista')[0].innerHTML = listaFiguras;
            document.getElementById('lista').innerHTML =  listaUsuarios;
        }
    }
}