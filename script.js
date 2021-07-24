'use strict'
function isMobile() {
	    if (sessionStorage.desktop)
	        return false;
	    else if (localStorage.mobile)
	        return true;
	    var mobile = ['iPhone', 'ipad', 'android', 'blackberry', 'nokia', 'opera mini', 'windows mobile', 'windows phone', 'iemobile'];
	    for (var i in mobile)
	        if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0) return true;
	    return false;
	}





let butonEnviar = document.querySelector('#btnEnviar');
butonEnviar.addEventListener('click', function(e){
	e.preventDefault();

	//números de telefono de sucursales
	let cuscatlan = "50378054360"; 
	let joya = "50372008159 ";
	let soya = "50370184872 ";
	let sanBenito = "50370246784";
	let metropolis = "50376137208";

	//id de formularios
	let formWoof = document.querySelector('#formWoof');
	let nombre_usuario = document.querySelector('#nombre_usuario').value;
	let correo = document.querySelector('#correo').value;
	let sucursal = document.querySelector('#sucursal').value;
	let descripcion = document.querySelector('#descripcion').value;
	let urlDesktop = 'https://api.whatsapp.com/';
	let urlMobile = 'whatsapp://';
	let url = "";
	
		if(sucursal == 'Estadio Cuscatlán'){
			let url =`send?phone=${cuscatlan}&text=
			*_VETERINARIA WOOF_*%0A%0A
			*Nombre completo:*%0A
			${nombre_usuario}%0A%0A

			*Correo electrónico:*%0A
			${correo}%0A%0A

			*Sucursal de preferencia:*%0A
			${sucursal}%0A%0A

			*Duda consulta o sugerencia:*%0A
			${descripcion}`;
			
			if(isMobile()) {
	            window.open(urlMobile + url, '_blank');
	            formWoof.reset();
	        }else{
	            window.open(urlDesktop + url, '_blank');
	            formWoof.reset();
	        }

		}
   
		else if(sucursal == 'Centro Comercial La Joya'){
			let url = `send?phone=${joya}&text=
			*_VETERINARIA WOOF_*%0A%0A
			*Nombre completo:*%0A
			${nombre_usuario}%0A%0A

			*Correo electrónico*%0A
			${correo}%0A%0A

			*Sucursal de preferencia:*%0A
			${sucursal}%0A%0A

			*Duda consulta o sugerencia:*%0A
			${descripcion}`;
			
			if(isMobile()) {
	            window.open(urlMobile + url, '_blank');
	            formWoof.reset();
	        }else{
	            window.open(urlDesktop + url, '_blank');
	            formWoof.reset();
	        }

		}


		else if(sucursal == 'Soyapango'){
			let url = `send?phone=${soya}&text=
			*_VETERINARIA WOOF_*%0A%0A
			*Nombre completo:*%0A
			${nombre_usuario}%0A%0A

			*Correo electrónico:*%0A
			${correo}%0A%0A

			*Sucursal de preferencia:*%0A
			${sucursal}%0A%0A

			*Duda consulta o sugerencia:*%0A
			${descripcion}`;
			
			if(isMobile()) {
	            window.open(urlMobile + url, '_blank');
	            formWoof.reset();
	        }else{
	            window.open(urlDesktop + url, '_blank');
	            formWoof.reset();
	        }

		}

		else if(sucursal == 'Centro Comercial San Benito'){
			let url = `send?phone=${sanBenito}&text=
			*_VETERINARIA WOOF_*%0A%0A
			*Nombre completo:*%0A
			${nombre_usuario}%0A%0A

			*Correo electrónico:*%0A
			${correo}%0A%0A

			*Sucursal de preferencia:*%0A
			${sucursal}%0A%0A

			*Duda consulta o sugerencia:*%0A
			${descripcion}`;
			
			if(isMobile()) {
	            window.open(urlMobile + url, '_blank');
	            formWoof.reset();
	        }else{
	            window.open(urlDesktop + url, '_blank');
	            formWoof.reset();
	        }
			
		}
		else if(sucursal == 'Unicentro Metrópolis'){
			let url = `send?phone=${metropolis}&text=
			*_VETERINARIA WOOF_*%0A%0A
			*Nombre completo:*%0A
			${nombre_usuario}%0A%0A

			*Correo electrónico:*%0A
			${correo}%0A%0A

			*Sucursal de preferencia:*%0A
			${sucursal}%0A%0A

			*Duda consulta o sugerencia:*%0A
			${descripcion}`;
			
			if(isMobile()) {
	            window.open(urlMobile + url, '_blank');
	            formWoof.reset();
	        }else{
	            window.open(urlDesktop + url, '_blank');
	            formWoof.reset();
	        }
			
		}

});//end event







