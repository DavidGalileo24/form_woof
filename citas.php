<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Veterinaria Woof | Formulario de contacto</title>

	<link rel="stylesheet" type="text/css" href="normalize.css">

	<!-- foundation-float.min.css: Compressed CSS with legacy Float Grid -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-float.min.css" integrity="sha256-4ldVyEvC86/kae2IBWw+eJrTiwNEbUUTmN0zkP4luL4=" crossorigin="anonymous">

	<!-- foundation-prototype.min.css: Compressed CSS with prototyping classes -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-prototype.min.css" integrity="sha256-BiKflOunI0SIxlTOOUCQ0HgwXrRrRwBkIYppEllPIok=" crossorigin="anonymous">

	<!-- foundation-rtl.min.css: Compressed CSS with right-to-left reading direction -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-rtl.min.css" integrity="sha256-F+9Ns8Z/1ZISonBbojH743hsmF3x3AlQdJEeD8DhQsE=" crossorigin="anonymous">
	<!--google fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200&display=swap" rel="stylesheet"> 

	<!--fontawesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body class="body">
	

	<div class="grid-x">
	  <div class="cell small-1 medium-1 large-1 redesSociales">
	  	<div class="columns small-0">
	  		<ul>
	  			<li><a href="https://www.facebook.com/woofvet" class="ancla"><i class="fab fa-facebook-f iconRedes indexIcon"></i></a></li>
	  			<li><a href="https://www.instagram.com/woof_vet/" class="ancla"><i class="fab fa-instagram iconRedes"></i></a></li>
	  			<li><a href="https://veterinariaswoof.com/" class="ancla"><i class="fas fa-globe iconRedes"></i></a></li>
	  		</ul>
	  	</div>
	  </div>
	   <div class="cell small-3 medium-2 large-3"></div>
	  <div class="cell small-12 medium-8 large-5">
	  	<br><br>
	  		<form autocomplete="off" id="formWoof" class="formWoof" method="POST">

			  <div class="grid-container">
			  	
			    <div class="grid-x grid-padding-x">
			    <div class="medium-0 cell"></div>

			      <div class="medium-x cell ">
			      	<br><img src="images/logo1.svg" alt="Logo Veterinaria Woof" class="logo1">
			      	<p class="text-center">Una experiencia diferente, donde tu mascota es nuestra pasión</p>
			      	<br>
			        <label>Nombre completo:
			          <input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="" required>
			        </label>

			       <label>Correo electrónico:
					    <input type="email" name="correo" id="correo" placeholder="" required>
					</label>


					<div class="grid-container">
				    <div class="grid-x grid-padding-x">
				      <div class="medium-6 cell">
				       	<label>Sucursal de preferencia
					  <select id="sucursal" name="sucursal" placeholder="" class="required" > 
					  	<option value="opción" selected = "selected" disabled>Seleccione una opción</option>
					    <option class="opcionSelect" value="Estadio Cuscatlán">Estadio Cuscatlán (Servicio 24/7)</option>
					    <option class="opcionSelect" value="Centro Comercial La Joya">Centro Comercial La Joya</option>
					    <option class="opcionSelect" value="Soyapango">Soyapango (Servicio 24/7)</option>
					    <option class="opcionSelect" value="Centro Comercial San Benito">Centro Comercial San Benito</option>
					    <option class="opcionSelect" value="Unicentro Metrópolis">Unicentro Metrópolis</option>
					  </select>
					</label>
				      </div>
				       <div class="medium-6 cell">
				       		<label>Servicios
							  <select id="servicios" name="servicios" placeholder="" class="required" > 
							  	<option value="opción" selected = "selected" disabled>Seleccione una opción</option>
							    <option class="opcionSelect" value="Cirugía">Cirugía</option>
							    <option class="opcionSelect" value="grooming">Grooming</option>
							   
							  </select>
							</label>
				      </div>
				      </div>
				      </div>


			        <label>Escríbenos tus dudas, consultas o sugerencias			 
					  <textarea name="descripcion" id="descripcion" required placeholder=""></textarea>
					</label>

					<br>
					
					<div class="grid-x flexData">
						<div class="">
					  		<button id="btnEnviar" class="button success">
								<i class="fab fa-whatsapp"></i> Reservar cita
							</button>
					  </div>
					  
					  <div class="ocultar">					  	
					  		<ul class="lista2">
					  			<li class="item2"><a href="https://www.facebook.com/woofvet" class="ancla"><i class="fab fa-facebook-f iconRedes2"></i></a></li>
					  			<li class="item2"><a href="https://www.instagram.com/woof_vet/" class="ancla"><i class="fab fa-instagram iconRedes2"></i></a></li>
					  			<li class="item2"><a href="https://veterinariaswoof.com/" class="ancla"><i class="fas fa-globe iconRedes2"></i></a></li>
					  		</ul>
					  </div>					   
					</div>

			      </div>
			      <div class="medium-0 cell"></div>
			    </div>
			  </div>

		</form>
	  </div>
	  <div class="cell small-4 medium-1 large-3"></div>
	</div>
	

	



	<script src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<!--validate-->
	<script src="jquery-validation/dist/jquery.validate.js"></script>
	<script>
     	

	  $('#formWoof').validate();
		 
    </script>
</body>
</html>