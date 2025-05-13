function imgBienvenida(){
    console.log("Función-Bienvenida")
    document.getElementById("Tabla").style.display= "none"
    document.getElementById("Formulario").style.display= "none"
    document.getElementById("Agradecimiento").style.display= "none"
    document.getElementById("tarjeta_bienvenida").style.display= "block"
}
function formulario(){
    console.log("Formulario")
    document.getElementById("tarjeta_bienvenida").style.display= "none"
    document.getElementById("Formulario").style.display= "block"
    document.getElementById("Tabla").style.display= "none"
    $("#txt_carrera").val("");
    $("#txt_nombre").val("");
    $("#txt_tipo").prop("checked", false)
}
function agradecimiento(){
    console.log("Agradecimiento")
    document.getElementById("tarjeta_bienvenida").style.display= "none"
    document.getElementById("Formulario").style.display= "none"
    document.getElementById("Agradecimiento").style.display= "block"
    document.getElementById("Tabla").style.display= "none"
}
function Tabla(){
    console.log("Tabla")
    document.getElementById("tarjeta_bienvenida").style.display= "none"
    document.getElementById("Formulario").style.display= "none"
    document.getElementById("Agradecimiento").style.display= "none"
    document.getElementById("Tabla").style.display= "block"
}
function listarUsuarios(nombre, carrera, tipo) {
    console.log("Agregando usuario a la tabla");
    let nuevaFila = `<tr>
        <td>${nombre}</td>
        <td>${carrera}</td>
        <td>${tipo}</td>
    </tr>`;
    $("#tablaBody").append(nuevaFila);// Agregar la nueva fila a la tabla
}
$("#guardarBtn").click(function() {
    let datos = {
        nombre: $("#txt_nombre").val().trim(),
        carrera: $("#txt_carrera").val().trim(),
        tipo: $("#txt_tipo").is(":checked") ? "activo" : "inactivo"
    };
    console.log(datos)
    /*Verificar que los campos no estén vacíos
    if (datos.nombre === "" || datos.carrera === "") {
        alert("Por favor ingresa todos los datos.");
        return;
    }
        */
    // Llamar a la función para agregar los datos en la tabla antes de enviarlos
    listarUsuarios(datos.nombre, datos.carrera, datos.tipo);
    // Enviar los datos al servidor vía AJAX
    $.post("guardar_datos.php", datos, function(respuesta) {
        alert(respuesta);
        console.log("Servidor dice:", respuesta);
    }).fail(function(jqXHR, textStatus, errorThrown) {
        console.log("Error en la conexión con el servidor.", textStatus, errorThrown);
    });
    // Limpiar los campos del formulario después de enviarlos
    $("#txt_nombre, #txt_carrera").val("");
});
imgBienvenida()





