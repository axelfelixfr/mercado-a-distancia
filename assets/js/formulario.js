// Se hace una función autoejecutable para proteger el código JavaScript
// De esta manera protegemos todo nuestro código, variables, objetos, propiedades, etc
(function(){

// Objeto con propiedades de formulario
var propieFormulario = {
	// Se puede acceder al formulario por medio de su nombre (name)
	// 	<form action="" class="formulario-contacto" name="formulario_contacto">
	// 	</form>
	// Solo colocando: document.name
	formulario: document.formulario_contacto,

	// Podemos acceder a los elementos del formulario con ".elements"
	// Haciendo esto, podemos ingresar a los inputs (nombre, email, mensaje y enviar)
	elementos: document.formulario_contacto.elements,

	error: null,
	textoError: null
}


// Objeto con métodos de formulario
var metodoFormulario = {
	inicio: function(){
		// Este for tomara todos los inputs que esten es "formulario_contacto"
		// Por eso tenemos que poner ".length" pues tomara todos los elementos que haya
		for (var i = 0; i < propieFormulario.elementos.length; i++) {
			// Aquí verificamos que solo queremos tomar los inputs de nombre, email y mensaje
			// Por lo tanto solo tomariamos estos:
			// 		<input type="text" id="nombre" name="nombre">
			// 		<input type="text" id="email" name="email">
			// Con la propiedad ".type" podemos acceder al tipo de input
			// 
			// Con el textarea sería diferente, pues igual debemos tomar este, pero no es un input:
			// 		<textarea name="mensaje" id="mensaje"></textarea>
			// Ahora con el textarea es necesario acceder a ".nodeName" pues nos devuelve el nombre de la etiqueta
			// Con la función "toLowerCase()" ponemos el texto en minusculas, ya que la consola devuelve "TEXTAREA" y debe ser "textarea" para poder compararlo correctamente
			if(propieFormulario.elementos[i].type == 'text' || propieFormulario.elementos[i].type == 'email' || propieFormulario.elementos[i].type == 'password' || propieFormulario.elementos[i].type == 'number' || propieFormulario.elementos[i].nodeName.toLowerCase() == 'textarea'){
				propieFormulario.elementos[i].addEventListener('focus', metodoFormulario.focusInput);
				propieFormulario.elementos[i].addEventListener('blur', metodoFormulario.blurInput);
			}
		}

		// El efecto "submit" basicamente sirve para los formularios
		// Este se activa cuando se intenta enviar el formulario
		propieFormulario.formulario.addEventListener('submit', metodoFormulario.validarInputs);
	},

	// focusInput es el efecto para el formulario que sea tipo Material Design
	// Basicamente coloca los label arriba cuando el usuario da click en el input, que sería el efecto focus
	focusInput: function(){
		// Con ".this.parentElement" accedemos al input ground de cada elemento
		// Con ".children[1]" accedemos a los hijos, que en este caso son los "label" que serían los títulos, accedemos al segundo hijo
		this.parentElement.children[1].className = 'label active';
	},

	// blurInput es el efecto que le quita el efecto focusInput
	// Cuando el usuario ya no haga focus en los input, los label volveran a colocarse abajo a menos que haya texto
	blurInput: function(){
		// Con este if evaluamos que el input este vacio, para eso comparamos la propiedad "value" de los input
		if(this.value == ''){
			// Si están vacios los input, entonces accedemos a sus clases y le quitamos la clase "active"
			this.parentElement.children[1].className = 'label';
		}	
	},

	validarInputs: function(e){
		// Con este for accedemos a todos los elementos (a los input-group)
		for (var i = 0; i < propieFormulario.elementos.length; i++) {
                    
                    if(propieFormulario.elementos[i].type == 'text' || propieFormulario.elementos[i].type == 'email' || propieFormulario.elementos[i].type == 'password' || propieFormulario.elementos[i].type == 'number' || propieFormulario.elementos[i].nodeName.toLowerCase() == 'textarea'){

			// Con este if verificamos que el input al que acceda el usuario, este vacio
			if(propieFormulario.elementos[i].value == ''){
				// Si esta vacío ejecutara estas intrucciones
				
				e.preventDefault(); // Con preventDefault quitamos las acciones por defecto, en este caso quita lo de enviar				
				
				// Con este if verificamos que solo esten 2 elementos: el input y su label
				// Ya que si ya existe otro elemento (en este caso el parrafo del error) entonces no debemos volver a imprimir el error
				if(propieFormulario.elementos[i].parentElement.children.length < 3){
					propieFormulario.error = document.createElement('p'); // Creamos el parrafo del error
				
					// Creamos el texto del error, el "propieFormulario.elementos[i].name" se usa para hacerlo dinamico
					// y devolver el nombre del input, sería algo así: "Por favor llena el campo con tu [nombre][email][mensaje]"
					propieFormulario.textoError = document.createTextNode('Por favor llena el campo que corresponda a ' + propieFormulario.elementos[i].name);
					
					// Con la función appendChild(), le agregamos el texto al parrafo creado
					propieFormulario.error.appendChild(propieFormulario.textoError);
					
					// Con ".className" le agregamos la clase error al parrafo
					// <p class="error"></p>
					propieFormulario.error.className = 'error';

					// Accedemos a cada uno de los "inputgroups" y dependiendo estan vacíos se les enviara el error
					propieFormulario.elementos[i].parentElement.appendChild(propieFormulario.error);

				}
				// Con este else podemos verificar si el campo sigue vacío al momento de volver a enviar
			} else {
				if(propieFormulario.elementos[i].parentElement.children.length >= 3){
					// Accdemos a los elementos de los input-group y verificamos remover el parrafo del error en caso de ya existir texto en los input
					propieFormulario.error = propieFormulario.elementos[i].parentElement.getElementsByTagName('p')[0];
					propieFormulario.elementos[i].parentElement.removeChild(propieFormulario.error);
				}
			}
                    }
		}
	}
}

metodoFormulario.inicio();

}())
