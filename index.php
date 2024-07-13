<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IES Nº1 "Dra. Alicia Moreau de Justo"</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

    <link href="res/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <link href="estilos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="res/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="res/slick/slick-theme.css" />

</head>

<body>

    <?php include 'cabezal.php';
    ?>


    <div class="container-fluid ">
        <?php include 'navbar.php' ?>
    </div>
    
    <div class="contenedor_facebook">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook"
            viewBox="0 0 16 16">
            <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
        </svg>
    </div>
    <div class="carrousel_container">
        <?php include 'carrusel.php' ?>
    </div>
   
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<!-- <script src="res/slick/slick.js"></script> -->
<!-- <script src="res/slick/slick.min.js"></script> -->


<script type="text/javascript">
    $(document).ready(function () {
        $(window).on('resize', function () {
            if ($('.navbar-toggler').is(':visible')) {
                $('.navegador').css('background-color', '#F8F9FA');
            } else {
                $('.navegador').css('background-color', 'lightgray');
            }
        });

        $('.bi-facebook').on('click', function () {
            window.open('https://www.facebook.com/profile.php?id=100078640155748', '_blank');
        })


        $('.imagen_1').on('click', function(){
            window.open('https://ies1-caba.infd.edu.ar/sitio/pronunciamientos-ies1-2023/', '_blank');
        })
        $('.imagen_2').on('click', function(){
            window.open('https://docs.google.com/document/d/1cRvmmizBbo5r94h7HBmqfWoR80DU8l6pYQnwf5284ok/edit?usp=sharing', '_blank');
        })
        $('.imagen_3').on('click', function(){
            window.open('https://docs.google.com/document/d/10tgUKxy-GWx55EbZJo4Hr1svv2tgaHvf/edit?rtpof=true&sd=true', '_blank');
        })
        $('.imagen_4').on('click', function(){
            window.open('https://sites.google.com/view/espaciodetutoriaies1/inicio?authuser=0', '_blank');
        })
        $('.imagen_5').on('click', function(){
            window.open('https://guarani-autogestionfdocente.bue.edu.ar/', '_blank');
        })
        $('.imagen_6').on('click', function(){
            window.open('https://padlet.com/lucreciapetit/proyecto-creacion-407l37k8klzuauxi', '_blank');
        })
    });



</script>

</html>