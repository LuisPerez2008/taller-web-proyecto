
var select = document.getElementById("elegir-cate");

// Evento change para redireccionar y seleccionar la opción adecuada
select.addEventListener("change", function () {
    var seleccion = this.value;
    if (seleccion === "hombre") {
        window.location.href = "../categorias/hombre.html";
    } else if (seleccion === "mujer") {
        window.location.href = "../categorias/mujer.html";
    } else if (seleccion === "todos"){
        window.location.href = "../categoria.html";
        
    }
});

// Obtener la página actual
var currentPage = window.location.pathname;

// Establecer la opción seleccionada basada en la página actual
if (currentPage.endsWith("hombre.html")) {
    select.value = "hombre";
} else if (currentPage.endsWith("mujer.html")) {
    select.value = "mujer";
} else if (currentPage.endsWith("categoria.html")){
    select.value = "todos";
}