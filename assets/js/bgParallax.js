// Se hace una función autoejecutable para proteger el código JavaScript
// De esta manera protegemos todo nuestro código, variables, objetos, propiedades, etc
(function(){

// Objeto con Propiedades de Parallax
var  propieParallax = {
	// Como con querySelector() es con CSS entonces debemos de hacer como seleccionarlo como CSS
	// Por ellos usamos el punto '.' al principio pues es necesario para seleccionar la clase en CSS
	seccion: document.querySelector('.parallax'),
	recorrido: null,
	limite: null
}

// Objeto con Métodos de Parallax
var metodoParallax = {

	inicio: function () {
		// Creamos el efecto 'scroll' desde un inicio
		window.addEventListener('scroll', metodoParallax.scrollParallax);
	},

	scrollParallax: function () {
		// Con la propiedad 'pageYOffset' del objeto 'window' sabremos el recorrido que se va haciendo con el scroll
		// Este recorrido sirve para ver en que parte de la página fue el usuario con el scroll
		propieParallax.recorrido = window.pageYOffset;

		// Con la propiedad 'offsetTop' sabremos cuantos pixeles hay entre el inicio de la sección parallax
		// hasta el inicio de la página, esto nos sirve para saber el límite que tiene la sección parallax
		propieParallax.limite = propieParallax.seccion.offsetTop + propieParallax.seccion.offsetHeight;
		// Con la propiedad 'offsetHeight' sabremos el cuantos pixeles hay entre toda la sección de parallax (la altura del elemento 'parallax')
		// por lo tanto debemos sumar el 'offsetTop' con el 'offsetHeight' para saber el total de la sección
		

		// Con "propieParallax.recorrido > propieParallax.seccion.offsetTop - window.outerHeight" se evalua que el recorrido del scroll 
		// haya llegado a la seccion de "contacto" donde se ve el efecto parallax
		// Con "propieParallax.recorrido <= propieParallax.limite" se evalua que el recorrido no sobre pase la seccion de "contacto"
		// Ya que una vez que la seccion se sobre pase, no se debe ejecutar el efecto parallax, pues ya no sería visible
		// El objeto y la propiedad "window.outerHeight" evalua el tamaño de la ventana, sería lo que hicimos con "propieParallax.seccion.offsetHeight"
		if ( propieParallax.recorrido > propieParallax.seccion.offsetTop - window.outerHeight && propieParallax.recorrido <= propieParallax.limite ){
			// Para hacer el efecto parallax debemos modificar los estilos CSS de la sección, especificamente "background-position" en Y
			// Con "(propieParallax.recorrido - propieParallax.seccion.offsetTop)" se evalua que el efecto parallax 
			// se vea de forma correcta al eliminar la seccion completa de "contacto" del recorrido que se hizo con el scroll
			// ¿Porqué se divide entre "1.5"? Esto se debe a que normalmente esta en "1", por lo tanto para que 
			// el efecto sea mas lento, no se vea brusco lo divimos entre "1.5"
			// ¿Porqué se le agrega el "px"? Esto se debe porque son propiedades CSS y debemos darle una unidad de medida, en este caso son pixeles 
			propieParallax.seccion.style.backgroundPositionY = (propieParallax.recorrido - propieParallax.seccion.offsetTop) / 1.5 + 'px';
		} else {
			// Cuando el scroll o recorrido salga de la sección "contacto", se debe iniciar nuevamente la cuenta, por lo tanto pasa a 0
			propieParallax.seccion.style.backgroundPositionY = 0;
		}
	}
}

metodoParallax.inicio();

}())
