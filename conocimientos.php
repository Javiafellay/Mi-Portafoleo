<?php include_once 'includes/templates/header.php'; ?>
<body>

<!-- <div class="banner">
<video autoplay muted loop>
<source src="video.mp4" type="video/mp4">
</video>
<h2>Javier Web Developed</h2>
</div>bannerVideo-->

<?php include_once 'includes/templates/barra.php'; ?>


<div class="contenedor animatedParent">

	<div class="img-design animated fadeInUp">
		<img src="img/web-design.svg" alt="web Design" class="alinear">
	</div>

	<div class="conocimientos html5">
		<div class="html">
			<p class="cono-parrafo"><span class="color-span">HTML</span> Es un lenguaje para darle estructura a una página web<br>
			el esqueleto del contenido<br>Mientras que <span class="color-span">CSS</span> es la que brinda estética a ella</p>
		</div>
		<div class="html-img">
			<img src="img/html-css.svg" alt="html" class="alinear">
		</div>
	</div>

	<div class="conocimientos html5">
				<div class="html-img">
			<img src="img/framework-javascript.svg" alt="Js" class="alinear">
		</div>
		<div class="html">
			<p class="cono-parrafo"><span class="color-span">JavaScript</span> nos permite hacer interacciónes con el usuario hace el sitio más dinámico mientras que <span class="color-span">JQuery</span> es un framework que nos ayuda a realizar las tareas de forma más sencilla</p>
		</div>
	</div>

		<div class="conocimientos html5">
		<div class="html">
			<p class="cono-parrafo"><span class="color-span">PHP</span> es un lenguaje de programación que nos ayuda a interactuar con el servidor y la base de Datos<br>
			<span class="color-span">Laravel</span> también es un framework de php muy popular que nos facilita trabajar con el lenguaje</p>
		</div>
		<div class="html-img">
			<img src="img/laravel.svg" alt="Laravel" class="alinear">
		</div>
	</div>

<p class="len">Lenguajes</p>
		<div class="conocimientos html5 " data-seek-top-offset = '- 300' data-sequence = '500'>

		<div class="html">
		<ul>
			<li class='animated bounceInLeft' data-id = '1'>Inglés</li>
			<li class='animated bounceInLeft' data-id = '2'>Alemán</li>
			<li class='animated bounceInLeft' data-id = '3'>Guaraní</li>
			<li class='animated bounceInLeft' data-id = '4'>Español</li>
		</ul>
		</div>
		<div class="html-img">
			<img src="img/idiomas.svg" alt="Laravel">
		</div>
	</div>

<p class="fotografias">Fotografías</p>
<div class="contenedor">
	<!-- SnapWidget -->
<iframe src="https://snapwidget.com/embed/884767" class="snapwidget-widget contenedor instagram-api" allowtransparency="true" frameborder="0" scrolling="no" ></iframe>
</div>

<?php include_once 'includes/templates/footer.php';  ?>

</div><!--Contenedor-->
<script src="js/css3-animate-it.js"></script>
<script src="js/main.js"></script>
</body>
</html>
