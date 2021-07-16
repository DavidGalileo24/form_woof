'use strict'

let butonEnviar = document.querySelector('#butonEnviar');
butonEnviar.addEventListener('click', function(e){
	e.preventDefault();

	//números de telefono de sucursales
	let cuscatlan = "50379876355"; //Jorge
	let joya = "50372622693"; //Bri
	let soya = "50379544510"; //Ernesto
	let sanBenito = "50376276889"; //Jennifer

	//id de formularios
	let formWoof = document.querySelector('#formWoof');
	let nombre_usuario = document.querySelector('#nombre_usuario').value;
	let correo = document.querySelector('#correo').value;
	let numWhats = document.querySelector('#numWhats').value;
	let sucursal = document.querySelector('#sucursal').value;
	let descripcion = document.querySelector('#descripcion').value;

	if(sucursal == 'Estadio Cuscatlán'){
		let url = `https://api.whatsapp.com/send?phone=${cuscatlan}&text=
		*_VETERINARIA WOOF_*%0A%0A
		*Nombre completo:*%0A
		${nombre_usuario}%0A%0A

		*Correo electrónico:*%0A
		${correo}%0A%0A

		*Número de WhatsApp:*%0A
		${numWhats}%0A%0A

		*Sucursal de preferencia:*%0A
		${sucursal}%0A%0A

		*Duda consulta o sugerencia:*%0A
		${descripcion}`;
		window.open(url);
		formWoof.reset();

	}else if(sucursal == 'Centro Comercial La Joya'){
		let url = `https://api.whatsapp.com/send?phone=${joya}&text=
		*_VETERINARIA WOOF_*%0A%0A
		*Nombre completo:*%0A
		${nombre_usuario}%0A%0A

		*Correo electrónico*%0A
		${correo}%0A%0A

		*Número de WhatsApp:*%0A
		${numWhats}%0A%0A

		*Sucursal de preferencia:*%0A
		${sucursal}%0A%0A

		*Duda consulta o sugerencia:*%0A
		${descripcion}`;
		window.open(url);
		formWoof.reset();

	}else if(sucursal == 'Soyapango'){
		let url = `https://api.whatsapp.com/send?phone=${soya}&text=
		*_VETERINARIA WOOF_*%0A%0A
		*Nombre completo:*%0A
		${nombre_usuario}%0A%0A

		*Correo electrónico:*%0A
		${correo}%0A%0A

		*Número de WhatsApp:*%0A
		${numWhats}%0A%0A

		*Sucursal de preferencia:*%0A
		${sucursal}%0A%0A

		*Duda consulta o sugerencia:*%0A
		${descripcion}`;
		window.open(url);
		formWoof.reset();

	}
	else if(sucursal == 'Centro Comercial San Benito'){
		let url = `https://api.whatsapp.com/send?phone=${sanBenito}&text=
		*_VETERINARIA WOOF_*%0A%0A
		*Nombre completo:*%0A
		${nombre_usuario}%0A%0A

		*Correo electrónico:*%0A
		${correo}%0A%0A

		*Número de WhatsApp:*%0A
		${numWhats}%0A%0A

		*Sucursal de preferencia:*%0A
		${sucursal}%0A%0A

		*Duda consulta o sugerencia:*%0A
		${descripcion}`;
		window.open(url);
		formWoof.reset();
	}

});







