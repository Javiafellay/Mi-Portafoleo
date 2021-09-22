<?php include_once 'includes/templates/header.php'; ?>
<body>
<header>
<div class="banner">
<video autoplay muted loop>
<source src="video.mp4" type="video/mp4">
</video>
<h2>Javier Desarrollador Web</h2>
</div><!--bannerVideo-->
</header>

<div class="contenedor">

<?php include_once 'includes/templates/barra.php'; ?>

<div class="contenedor-info">

<div class="info">
<!--Proteccion OCular-->
<div class="container">
            <!-- <p>Protección de Vista</p>
        <p><button class="btn btn-outline-dark " id="apply-filter">Filtro Azul</button>
        <button class="btn btn-outline-dark " id="remove-filter">Normal</button>
        <button class="btn btn-outline-dark " id="other-filter">Oscuro</button>
            </p> -->
    </div>
<p class="inicio">Que Tal!, soy Javier apasionado a la Tecnología cursando el ultimo año de Ingeniería Informática.
Cada día se puede aprender algo nuevo, mi lema es <br> <span class="cite"><cite>NO DEJES QUE TUS SUEÑOS, SOLO SEÁN SUEÑOS</cite>
</span><br>
Tengo mucho para aportar, manejos de varias tecnologías nuevas, manejo de varios Idiomas puedes darles un vistaso <br><a href="conocimientos.html" class="button-info">aquí</a><br></p>
</div>

<div class="imagen">

<img class="iconito" src="img/u.svg" alt="foto">

</div><!--IMAGEN-->
</div><!--Contenedor-info-->

<h2 class="titulo-galeria">Algunos Proyectos Realizados</h2>

<div class="sy-box pictures-slider">

<ul id="pictures-demo">
	<li title="This is caption 1 <a href='#link'>Even with links!</a>">
	<img src="img/imagen1.PNG" alt="demo1_1">
	</li>
	<li title="This is caption 2">
	<img src="img/imagen2.PNG"  alt="demo1_2">
	</li>

</ul>
	
</div><!--Contenedora de Imagen-->

<!--Proyectos con Link-->
<div class="gasto-semanal">
	<div class="proyecto" data-aos="fade-up" data-aos-duration="2500">
		<p class="gasto">Administrador de Pacientes</p>
		<img src="img/pacientes.png" alt="">
		<a href="https://pwaadministrador.netlify.app/" target="_blank" class="button transparente link">Visitar</a>
	</div>

	<div class="proyecto" data-aos="fade-up" data-aos-duration="2500">
		<p class="gasto">Gasto Semanal</p>
		<img src="img/gastosemanal.png" alt="">
		<a href="https://proyectogastoconjs.netlify.app/" target="_blank" class="button transparente link">Visitar</a>
	</div>

	<div class="proyecto" data-aos="fade-up" data-aos-duration="2500">
		<p class="gasto">Api de Criptomonedas</p>
		<img src="img/cripto.png" alt="">
		<a href="https://javiercriptomonedas.netlify.app/" target="_blank" class="button transparente link">Visitar</a>
	</div>

</div>

<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p class="newsle">Tiene una Duda o Consulta</p>
    <h3 class="javi">Javier Martinez Guanez</h3>
    <a href="https://wa.me/+5950972458399?text=Buenas!%20vimos%20tu%20página%20portafóleo" class="button transparente alineado">Contáctame</a>
  </div><!--CONTENIDO-->
</div><!--NEWSLETTER PARALLAX-->

<!--SI VES ESTO, LA VERDAD ME GUSTARÍA TRABAJAR CON USTEDES ;)  -->

<!--Presioname-->
<div class="proyecto mensaje" data-aos="fade-up" data-aos-duration="2500" id="proyecto">
		<a href="#" class="button transparente link" id="pulsame">Pulsame</a>
</div>

<div  id="spinner">
        <div class="sk-chase">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
        </div>
    </div>

<?php include_once 'includes/templates/footer.php';  ?>

</div><!--Contenedor-->
<script src="js/main.js"></script>
</body>
</html>
<script src="js/css3-animate-it.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
