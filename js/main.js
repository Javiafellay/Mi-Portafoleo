(function(){
	"use strict";

	document.addEventListener('DOMContentLoaded', function(){

	});//Espera que se cargue el HTML

})(); 


function mostrarSpinner(e){
	e.preventDefault();
	//Mostrar el Spinner
	const spinner = document.querySelector('#spinner');
	spinner.style.display = 'flex';

	setTimeout( () => {

	spinner.style.display = 'none';
	//Agregamos la imagen
	const parrafo3 = document.createElement('p');
	parrafo3.textContent = 'Te agradezco por visitar mi portafoleo, si quieres dar un vistazo a mi curriculum, puedes descargarlo';
	parrafo3.classList.add('precio', 'inicio');

	// crear el div...
	const info = document.createElement('div');
	info.classList.add('info');
	info.appendChild(parrafo3);

	// Vamos a crear la imagen
	const imagen = document.createElement('img');
	imagen.src = 'img/JAVIER-MARTINEZ-GUANEZ_PDF_.svg';

	// Crear el Card..
	const card = document.createElement('div');
	card.classList.add('img');
	card.classList.add('curiicu');
	card.classList.add('fondo-curriculum');

	// Vamos a asignar la imagen al card...
	card.appendChild(imagen);

	// y el info
	card.appendChild(info);

	// Insertarlo en el HTML...
	const contenedor = document.querySelector('.mensaje');
	contenedor.appendChild(card); // al inicio info

	//Removemos el boton de Pulsame
	const btneliminar = document.querySelector('#pulsame');
	setTimeout(() => {
		btneliminar.remove();
	},10);

	},3000);
}


//Agregando la funcion al presionar el boton
 proyecto.onclick = mostrarSpinner ;

$(function(){
//Lettering
	//$('.nombre-sitio')	.lettering();

//Menu Fijo

var windowHeigth = $(window).height();
var barraAltura = $('.barra').innerHeight();

$(window).scroll(function(){
	var scroll = $(window).scrollTop();
	if(scroll > windowHeigth){
		$('.barra').addClass('fixed');
		$('body').css({'margin-top': barraAltura+'px'});
	}else{
		$('.barra').removeClass('fixed');
		$('body').css({'margin-top':'0px'});
	}
}); 

//MENU RESPONSIVE
$('.menu-movil').on('click', function(){
	$('.navegacion-principal').slideToggle();
});

});

$(window).scroll(function(){

	var scroll = $(window).scrollTop();
	if (scroll == 2233) {
		$('.conocimientos').addClass('animatedParent');
	}else{
		$('.conocimientos').removeClass('animatedParent');
	}

});

//Plugin Slippry para slider de Fotos

jQuery('#pictures-demo').slippry({
  // general elements & wrapper
  slippryWrapper: '<div class="sy-box pictures-slider" />', // wrapper to wrap everything, including pager

  // options
  adaptiveHeight: false, // height of the sliders adapts to current slide
  captions: false, // Position: overlay, below, custom, false

  // pager
  pager: false,
  
  // controls
  controls: false,
  autoHover: false,

  // transitions
  transition: 'kenburns', // fade, horizontal, kenburns, false
  kenZoom: 140,
  speed: 2000 // time the transition takes (ms)
});



//Funcion para proteccion de la vista
// $("#apply-filter").click(function() {
//     $("body").removeClass("other-filter");
//     $("body").addClass("blue-filter");
//   });
//   $("#remove-filter").click(function() {
//     $("body").removeClass("blue-filter other-filter");
//   });
//   $("#other-filter").click(function() {
//     $("body").removeClass("blue-filter");
//     $("body").addClass("other-filter");
//   });