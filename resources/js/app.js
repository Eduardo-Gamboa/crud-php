require('./bootstrap');

function LimpiarFormulario() {
    var nombre = document.getElementById("nombre");
    var apellidos = document.getElementById("apellidos");
    var correo = document.getElementById("correo");

    nombre.innerHTML = "";
    apellidos.innerHTML = "";
    correo.innerHTML = "";
}