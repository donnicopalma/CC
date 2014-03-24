/****************************************************************
  Carousel de imágenes 2008 1.0. 30-Jul-08
  Autor tunait http://javascript.tunait.com/
  Script de libre uso mientras se mantengan intactos los créditos de autor.
****************************************************************/

function tunObtObj(ide){
	return document.getElementById(ide)
}
var tunaCarousel = function (ideContenedor, desplazamiento, direccion){
	this.contenedor = tunObtObj(ideContenedor);
	this.contenedor.style.position = 'relative'
	this.contenedor.style.overflow = 'hidden'
	this.anchoContenedores = 0;
	this.ima_plei = 'plei.jpg'
	this.ima_pausa = 'pausa.jpg'
	var contenedor1 = document.createElement('div');
	contenedor1.setAttribute('id', ideContenedor + "_cont1");
	var Elementos = this.contenedor.childNodes
	var numElementos = Elementos.length;
	this.rec = 10
	this.rec2 = true
	this.direccion  = direccion
	this.mas = this.direccion == 'rtl' ? '+' :'-'
	this.masmas = this.direccion == 'rtl' ? '++' :'--'
	this.menos = this.direccion == 'rtl' ? '-' :'+'
	this.menosmenos = this.direccion == 'rtl' ? '--' :'++'
	this.menosIgual = this.direccion == 'rtl' ? '-=' :'+='
	this.masIgual = this.direccion == 'rtl' ? '+=' :'-='
	
	var arrayImas = new Array();
	for(m = numElementos -1 ; m >= 0; m--){
		if(Elementos[m].tagName == 'IMG' || Elementos[m].tagName == 'A' ){
			if(Elementos[m].nodeType == 1 && Elementos[m].tagName == 'A' && Elementos[m].hasChildNodes()) {
				var elHijos = Elementos[m].childNodes.length;
				for(n = 0; n < elHijos; n++){
					if(Elementos[m].childNodes[n].tagName == 'IMG'){
						this.anchoContenedores += Elementos[m].childNodes[n].clientWidth;
					}
					else if(Elementos[m].childNodes[n].tagName != 'IMG' && Elementos[m].childNodes[n].tagName != 'A'){
						Elementos[m].removeChild(Elementos[m].childNodes[n])
						elHijos--; n--
					}
				}
			}
			else{
				this.anchoContenedores += Elementos[m].clientWidth
			}
			var Nodo = Elementos[m]; 
			var clonNodo = Nodo.cloneNode(true);
			arrayImas[arrayImas.length] = clonNodo
		}
		this.contenedor.removeChild(Elementos[m])
	}
	for(m = arrayImas.length -1 ; m >= 0 ; m--){
		contenedor1.appendChild(arrayImas[m])
		
	}
	with(contenedor1.style){
		width = this.anchoContenedores + "px";
		left = 0 + 'px'
		position = 'absolute'
	}
	this.contenedor.setAttribute('marcha', 1)
	this.contenedor.setAttribute('stop', 0)
	this.contenedor.appendChild(contenedor1)
	this.cont1 = tunObtObj(contenedor1.getAttribute('id'))
	this.pos1 = 0;
	this.pos2 = this.direccion == 'rtl' ? this.anchoContenedores : (this.anchoContenedores * -1)
	contenedor2 = this.cont1.cloneNode(true);
	contenedor2.setAttribute('id', ideContenedor + "_cont2");
	contenedor2.style.left = this.anchoContenedores + 'px'
	this.contenedor.appendChild(contenedor2)
	this.cont2 = tunObtObj(contenedor2.getAttribute('id'))
	
	this.mueve = function (){
		if( this.contenedor.getAttribute('stop') == 1) return false
		if(this.contenedor.getAttribute('marcha') == 1){
			eval('this.pos1 ' + this.menosIgual +' desplazamiento')
			eval('this.pos2 ' + this.menosIgual + 'desplazamiento')
			this.rec = 10
			this.rec2 = true
		}
		else{
			if(this.rec > 0 && this.rec2 == true){
				eval('this.pos1 ' + this.masIgual +' desplazamiento')
				eval('this.pos2 ' + this.masIgual + ' desplazamiento')
				this.rec--
			}
			else if(this.rec == 0){
				this.rec = -10
				this.rec2 = false
			}
			else if(this.rec < 0&& this.rec2 == true){
				eval('this.pos1 ' + this.masIgual + ' desplazamiento')
				eval('this.pos2 ' + this.masIgual + ' desplazamiento')
				this.rec++
			}
		}
		if(this.direccion == 'rtl'){
			if(this.pos1 < (0 - this.anchoContenedores)) this.pos1 = this.pos2 + this.anchoContenedores
			if(this.pos2 < (0 - this.anchoContenedores)) this.pos2 = this.pos1 + this.anchoContenedores
		}
		else{
			if(this.pos1 > (this.anchoContenedores)) this.pos1 = this.pos2 - this.anchoContenedores
			if(this.pos2 > (this.anchoContenedores)) this.pos2 = this.pos1 - this.anchoContenedores
		}
		this.cont1.style.left = this.pos1 + "px"
		this.cont2.style.left = this.pos2 + "px"
	
	}
	this.cont1.onmouseover = function(){
		this.parentNode.setAttribute('marcha', 0)
	}
	this.cont2.onmouseover = function(){
		this.parentNode.setAttribute('marcha', 0)
	}
	this.cont1.onmouseout = function(){
		this.parentNode.setAttribute('marcha', 1)
	}
	this.cont2.onmouseout = function(){
		this.parentNode.setAttribute('marcha', 1)
	}






	this.controles = function(){
		accion = this.getAttribute('accion');
		if(accion == 'pausar'){
			this.parentNode.parentNode.setAttribute('stop', 1)
			this.setAttribute('src', this.getAttribute('ima_plei'));
			this.setAttribute('alt', 'Play');
			this.setAttribute('title', 'Play');
			this.setAttribute('accion', 'plei');
		
		}
		else if(accion == 'plei'){
			this.parentNode.parentNode.setAttribute('stop', 0)
			this.setAttribute('src', this.getAttribute('ima_pausa'));
			this.setAttribute('alt', 'Detener')
			this.setAttribute('title', 'Detener')
			this.setAttribute('accion', 'pausar')
			
		}
	}




	this.controlesCarousel = function(){
		contenedor_controles = document.createElement('span');
		contenedor_controles.style.position = 'absolute';
		contenedor_controles.style.cursor = 'pointer';
		contenedor_controles.setAttribute('id', ideContenedor + '_Controles')
		ima_controles = document.createElement('img')
		ima_controles.setAttribute('src', this.ima_pausa)
		ima_controles.setAttribute('alt', 'Detener')
		ima_controles.setAttribute('title', 'Detener')
		ima_controles.setAttribute('accion', 'pausar')
		ima_controles.setAttribute('ima_pausa', this.ima_pausa)
		ima_controles.setAttribute('ima_plei', this.ima_plei)
		ima_controles.onclick = this.controles
		contenedor_controles.appendChild(ima_controles)
		this.contenedor.appendChild(contenedor_controles)
		
	}

}