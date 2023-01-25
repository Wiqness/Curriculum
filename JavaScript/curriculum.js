/* Comportamiento menu */
$(".icono_menu").click(function () {
    $(this).toggleClass("active");
    $(".menu_navegacion").toggleClass("active"); /* toggleClass permite agregar una nueva clase para un objeto, pero también permite sacarla si ya está puesta previamente */
    $(".icono_menu i").toggleClass("fa-times");
    /* Esto debería cambiar el icono del menu a una x al clickearse, no funciona porque no se está cargando la fuente correctamente*/
    $("body").toggleClass("body_active")
});


/* Comportamiento presentacion homepage */
$(".contenedor_presentacion").click(function () {
    document.getElementById("img_arriba").className = "imagen_arriba_active";

    document.getElementById("img_abajo").className = "imagen_abajo_active";

    document.getElementById("body_active").className = "";

    document.getElementById("id_contenedor_presentacion").className = "contenedor_presentacion_active";
});

/* Funciones para copiar al portapapeles */

for (const element of document.getElementsByClassName("boton_contacto")) {
    element.addEventListener('click', (event) => {
        console.log(event);
        let texto_copiado = event.target.outerText;
        navigator.clipboard.writeText(texto_copiado);
        alert("Se ha copiado: " + texto_copiado + " al portapapeles");
    })
};