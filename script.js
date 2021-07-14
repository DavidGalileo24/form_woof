'use strict'

let butonEnviar = document.querySelector('#butonEnviar');
butonEnviar.addEventListener('click', function(e){
	e.preventDefault();

	//números de telefono de sucursales
	/*
		let cuscatlan = "50378054360";
		let joya = "50372008159";
		let soya = "50370184872";
		let sanBenito = "50370246784";
	*/
	let cuscatlan = "50378261462";
	//id de formularios
	let nombre_usuario = document.querySelector('#nombre_usuario').value;
	let correo = document.querySelector('#correo').value;
	let numWhats = document.querySelector('#numWhats').value;
	let sucursal = document.querySelector('#sucursal').value;
	let descripcion = document.querySelector('#descripcion').value;

	if(sucursal == '1'){
		let url = `https://api.whatsapp.com/send?phone=${cuscatlan}&text=
		*_VETERINARIA WOOF_*%0A
		*¿Cuál es tu nombre?*%0A
		${nombre_usuario}%0A

		*¿Cuál es tu correo?*%0A
		${correo}%0A

		*¿Cuál es tu número de WhatsApp?*%0A
		${numWhats}%0A

		*¿Cuál es tu sucursal preferida?*%0A
		${sucursal}%0A

		*¿Cuál es su duda, consulta o sugerencia?*%0A
		${servicio}`;

	}else if(sucursal == '2'){
		let url = `https://api.whatsapp.com/send?phone=${joya}&text=
		*_VETERINARIA WOOF_*%0A
		*¿Cuál es tu nombre?*%0A
		${nombre_usuario}%0A

		*¿Cuál es tu correo?*%0A
		${correo}%0A

		*¿Cuál es tu número de WhatsApp?*%0A
		${numWhats}%0A

		*¿Cuál es tu sucursal preferida?*%0A
		${sucursal}%0A

		*¿Cuál es su duda, consulta o sugerencia?*%0A
		${servicio}`;
	}else if(sucursal == '3'){
		let url = `https://api.whatsapp.com/send?phone=${soya}&text=
		*_VETERINARIA WOOF_*%0A
		*¿Cuál es tu nombre?*%0A
		${nombre_usuario}%0A

		*¿Cuál es tu correo?*%0A
		${correo}%0A

		*¿Cuál es tu número de WhatsApp?*%0A
		${numWhats}%0A

		*¿Cuál es tu sucursal preferida?*%0A
		${sucursal}%0A

		*¿Cuál es su duda, consulta o sugerencia?*%0A
		${servicio}`;
	}
	else if(sucursal == '4'){
		let url = `https://api.whatsapp.com/send?phone=${sanBenito}&text=
		*_VETERINARIA WOOF_*%0A
		*¿Cuál es tu nombre?*%0A
		${nombre_usuario}%0A

		*¿Cuál es tu correo?*%0A
		${correo}%0A

		*¿Cuál es tu número de WhatsApp?*%0A
		${numWhats}%0A

		*¿Cuál es tu sucursal preferida?*%0A
		${sucursal}%0A

		*¿Cuál es su duda, consulta o sugerencia?*%0A
		${servicio}`;
	}
	window.open(url);

});






