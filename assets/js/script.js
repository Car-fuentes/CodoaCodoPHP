
const formulario = document.getElementById("formulario");
const nombre = document.getElementById("nombre");
const apellido = document.getElementById("apellido");
const email = document.getElementById("email");
const cantidad = document.getElementById("cantidad");
const categoria = document.getElementById("categoria");
const resumenDePago = document.getElementById("resumenDePago");

nombre.addEventListener('input', validarNombre);
apellido.addEventListener('input', validarApellido);
email.addEventListener('input', validarEmail);
cantidad.addEventListener('input', validarCantidad);

function validarNombre() {
    const nombre = nombre.value.trim();
}

function validarApellido() {
    const apellido = apellido.value.trim();
}

function validarEmail() {
    const email = email.value.trim();
}

function validarCantidad() {
    const cantidad = cantidad.value.trim();
}

cantidad.addEventListener('input', calcularPrecio);
categoria.addEventListener('input', calcularPrecio);


function calcularPrecio() {

    let ticket = {
        precio: 200
    }

    let descuento = function (a) {
        return this.precio * a / 100;
    }

    let tktEstudiante = descuento.call(ticket, 20)
    let tktGeneral = descuento.call(ticket, 100)
    let tktTrainee = descuento.call(ticket, 50)
    let tktJunior = descuento.call(ticket, 85)


    switch (categoria.value) {
        case "estudiante":
            total = parseInt(cantidad.value) * tktEstudiante;
            break;
        case "trainee":
            total = parseInt(cantidad.value) * tktTrainee;
            break;
        case "junior":
            total = parseInt(cantidad.value) * tktJunior;
            break;
        case "general":
            total = parseInt(cantidad.value) * tktGeneral;
            break;
    }

    resumenDePago.innerHTML = `El total de tu compra es: $ ${total}`;
}


const botonBorrar = document.getElementById("borrar");
botonBorrar.addEventListener('click', borrarCampos);

function borrarCampos() {
    nombre.value = '';
    apellido.value = '';
    email.value = '';
    cantidad.value = '';
    resumenDePago.value = 'Total a pagar $';
    }