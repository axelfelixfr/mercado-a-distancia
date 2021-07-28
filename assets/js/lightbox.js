// Se hace una función autoejecutable para proteger el código JavaScript
// De esta manera protegemos todo nuestro código, variables, objetos, propiedades, etc
(function(){

// Objeto con las propiedades del efecto LightBox
var propieLight = {
	// Lleva dos puntos ":" y no un igual "=" porque se tratan de propiedades
	imgContainer: document.getElementsByClassName('lightbox'), // Se usa coma "," porque son propiedades

	// Se seleccionan las imagenes dentro de div's con clase 'lightbox' pues es el efecto
	imagen: null,

	// Le debemos pasar los enlaces de las imagenes, que seria el url('../img/portada-1.jpg') 
	// ya que ahí esta almacenada la imagen
	imagenSrc: null,

	// Vamos a llamar al body para hacer el modal de la imagen
	cuerpoDom: document.getElementsByTagName('body')[0], // getElementsByTagName es por etiqueta, en este caso la de <body></body>

	// Este sera el background negro de las imagenes
	lightbox_container: null,

	// Sera el que tendra las imagenes en sí
	modal: null,

	// Sera para el icono que cierre el modal
	cerrarModal: null,

	// Para la animación del modal
	animacion: 'fade'
}

// Objeto con los métodos del efecto LightBox
var metodoLight = {

	// Igual son propiedades pero que contienen métodos (funciones) en ellas
	inicio: function(){
		// El "propieLight.imgContainer.length" toma todas las imagenes que estan en un div con clase "lightbox"
		for (var i = 0; i < propieLight.imgContainer.length; i++) {
			//
			propieLight.imgContainer[i].addEventListener('click', metodoLight.capturaImagen);
		}

	}, // Se usa coma "," porque son propiedades


	capturaImagen: function(){

		// Almacena la imagen en la propiedad de "propieLight" que se llama "imagen", ahorita esta en null
		// Esto se logra a través del "this"
		propieLight.imagen = this;
		
		// Después ejecuta este método tomando la imagen que ya almacenamos arriba
		metodoLight.lightbox(propieLight.imagen);

	}, // Se usa coma "," porque son propiedades

	// Le pasamos a la función, la imagen que capturamos como parametro
	lightbox: function(imagen){
		// Para acceder a las propiedades CSS con JavaScript usamos el objeto window y el método getComputedStyle()
		// Ponemos como parametro al contenedor al que queremos acceder para ver los estilos CSS, en este caso el contenedor de la imagen
		// Después ponemos la propiedad exacta a la que queremos acceder, en este caso la de backgroundImage
		propieLight.imagenSrc = window.getComputedStyle(imagen, null).backgroundImage.slice(5, -2);
		// El método slice() sirve para acortar strings
		// El primer parámetro es el inicio del string, ya que queremos elimnar esto: url(" -> son 5 letras
		// El segundo parámetro es el final del string, ya que queremos eliminar esto )" -> son 2 letras
		// Por lo tanto quedaría así slice (5, -2), el último es negativo porque es de atrás hacia adelante
		
		// Creamos un div dentro del cuerpoDom (DOM) por cada vez que se haga click en la imagen
		// Después le damos al div un id, <div id="lightbox_container"></div>
		propieLight.cuerpoDom.appendChild(document.createElement('div')).setAttribute('id','lightbox_container');

		// Ahora tomaremos el mismo div que acabamos de crear con el método getElementById()
		// Todo esto lo haremos a través de la propiedad "lightbox_container" que esta en "propieLight"
		propieLight.lightbox_container = document.getElementById('lightbox_container');

		// Ahora cambiaremos los estilos CSS
		// Primero crearemos el background negro donde las imagenes estaran encima
		propieLight.lightbox_container.style.width = '100%';
		propieLight.lightbox_container.style.height = '100%';
		propieLight.lightbox_container.style.position = 'fixed';
		propieLight.lightbox_container.style.zIndex = '1000';
		propieLight.lightbox_container.style.background = 'rgba(0,0,0,0.8)';
		propieLight.lightbox_container.style.top = '0';
		propieLight.lightbox_container.style.left = '0';

		// Crearemos el div que contendra la imagen: <div id="modal"></div>
		propieLight.lightbox_container.appendChild(document.createElement('div')).setAttribute('id','modal');
		
		// Ahora tomaremos el mismo div que acabamos de crear con el método getElementById()
		// Todo esto lo haremos a través de la propiedad "modal" que esta en "propieLight"
		propieLight.modal = document.getElementById('modal');

		// Ahora cambiaremos los estilos CSS
		// Modificaremos los estilos de la imagen como tal
		propieLight.modal.style.height = '100%';

		// Ya esta la etiqueta de la imagen, pero falta darle el atributo de la ruta que es "src"
		// El segundo atributo sera la ruta que ya recortamos, que es: "propieLight.imagenSrc"
		propieLight.modal.appendChild(document.createElement('img')).setAttribute('src', propieLight.imagenSrc);

		propieLight.modal.getElementsByTagName('img')[0].setAttribute('class','imagen-modal'); // Aquí se seleccionan las etiquetas <img>
		// Como devuelve un arrelgo, debemos seleccionar el primer elemento, entonces sera: [0]
		// Le damos una clase a esta imagen <div class="imagen-modal"></div>
		
		// Le daremos una animación al momento de abrir la imagen
		if(propieLight.animacion == 'fade'){
			// Tomaremos la imagen que esta dentro del modal y le pondremos una opacity de 0 para que no sea visible
			document.getElementsByClassName('imagen-modal')[0].style.opacity = 0;

			// Con la función setTimeout() le pondremos opacity de 1 y también le pondemos un tiempo establecido
			setTimeout(function(){
				// Le pondremos un opacity de 1 para que sea visible nuevamente
				document.getElementsByClassName('imagen-modal')[0].style.opacity = 1;
			}, 70); // Este caso le pusimos 100 milisegundos
		}

		// Con la propiedad "innerHTML" se inserta HTML al div del modal, esto para ponerle el icono para cerrar la ventana
		propieLight.modal.innerHTML += '<i id="cerrar-modal" class="fa fa-times" aria-hidden="true"></i>';

		// Pondremos el icono con id "cerrar-modal" dentro de la propiedad "cerrarModal"
		propieLight.cerrarModal = document.getElementById('cerrar-modal');

		// Le daremos un evento de tipo "click" para que desaparezca el modal al dar click al icono
		propieLight.cerrarModal.addEventListener('click', metodoLight.cerrarModal);
	},

	// Esta función es para que le demos funcionalidad al icono de la "x"
	cerrarModal: function(){
		// Removeremos el div con id "lightbox_container" para que desaparezca del DOM al dar click en el icono
		propieLight.cuerpoDom.removeChild(propieLight.lightbox_container);
	}

}

metodoLight.inicio();

}())

