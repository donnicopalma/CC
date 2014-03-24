/****************************************************************
  Carousel de imágenes 2008 1.0. 30-Jul-08
  Autor tunait http://javascript.tunait.com/
  Script de libre uso mientras se mantengan intactos los créditos de autor.
****************************************************************/

//Inicialicia el/los carousel/es

var carousel

function mueveCarouse(){
		carousel.mueve()
}
onload = function(){
	carousel = new tunaCarousel('carousel1',1, 'rtl')
	tiempo = setInterval(mueveCarouse, 1)
}