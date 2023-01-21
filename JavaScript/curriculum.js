$(".icono_menu").click(function () {
    $(this).toggleClass("active");
    $(".menu_navegacion").toggleClass("active"); /* toggleClass permite agregar una nueva clase para un objeto, pero también permite sacarla si ya está puesta previamente */
    $(".icono_menu i").toggleClass("fa-times");
 /* Esto debería cambiar el icono del menu a una x al clickearse, no funciona porque no se está cargando la fuente correctamente*/
});

$(".imagen_abajo").click(function () {
    document.getElementById("img_arriba").className = "imagen_arriba_active";
    document.getElementById("img_abajo").className = "imagen_abajo_active";
    document.getElementById("body_presentacion").className = "body_presentacion_active";
});

$(".imagen_arriba").click(function () {
    document.getElementById("img_arriba").className = "imagen_arriba_active";
    document.getElementById("img_abajo").className = "imagen_abajo_active";
    document.getElementById("body_presentacion").className = "body_presentacion_active";
});


function copiarMail1(){
var texto_copiado = document.getElementById("email_outlook").innerHTML;
navigator.clipboard.writeText(texto_copiado)
alert("Se ha copiado: "+texto_copiado + " al portapapeles")
}

function copiarMail2(){
    var texto_copiado = document.getElementById("email_gmail").innerHTML;
    navigator.clipboard.writeText(texto_copiado)
    alert("Se ha copiado: "+texto_copiado + " al portapapeles")
    }


/*var person_data;
fetch("../JSON/info.json") /* Al ser una promesa tarda un tiempo en obtener la informacion (función asíncrona) */
    /*.then((res) => res.json())
    .then((json) => {
        person_data = json;
        document.getElementById("nombre").innerHTML = person_data.nombre;
    })*/

/* console.log(456);  *//* Esto lo ejecuta mientras se bsuca la info con fetch (funcion sincrono) */
/*console.log(window.getComputedStyle(document.getElementById("titulo_presentacion")).fontSize) /* De esta manera obtengo el valor de la fuente del título */
