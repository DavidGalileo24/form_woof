<!DOCTYPE html>
<html class="no-js" lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de contacto</title>
	<!--foundation-->
	<!-- foundation-float.min.css: Compressed CSS with legacy Float Grid -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-float.min.css" integrity="sha256-4ldVyEvC86/kae2IBWw+eJrTiwNEbUUTmN0zkP4luL4=" crossorigin="anonymous">

	<!-- foundation-prototype.min.css: Compressed CSS with prototyping classes -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-prototype.min.css" integrity="sha256-BiKflOunI0SIxlTOOUCQ0HgwXrRrRwBkIYppEllPIok=" crossorigin="anonymous">

	<!-- foundation-rtl.min.css: Compressed CSS with right-to-left reading direction -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-rtl.min.css" integrity="sha256-F+9Ns8Z/1ZISonBbojH743hsmF3x3AlQdJEeD8DhQsE=" crossorigin="anonymous">
	<!--google fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

	<!--fontawesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


	<style>
		body{
			font-family: 'Open Sans', sans-serif;
		}
		.error{
			color:  red;
		}
	</style> 
</head>
<body>
	
	
	<form autocomplete="off" method="POST" action="data.php" id="formWoof">

	  <div class="grid-container">
	  	
	    <div class="grid-x grid-padding-x">
	    <div class="medium-3 cell"></div>

	      <div class="medium-6 cell ">
	      	<br><h2 class="text-center">Formulario de contácto</h2><br>
	        <label>Nombre completo:
	          <input type="text" name="nombre_usuario" id="nombre_usuario"  required>
	        </label>

	        <label>Correo electrónico:
	          <input type="email" name="correo" id="correo"  required>
	        </label>

	        <label>
			  Escríbenos tus dudas o consultas
			  <textarea name="descripcion" id="descripcion" required></textarea>
			</label>
			<br>
			<button type="submit" id="butonEnviar" class="button primary">
				<i class="fas fa-paper-plane"></i> Enviar correo
			</button>
	      </div>
	      <div class="medium-3 cell"></div>
	    </div>
	  </div>
	</form>






	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<!--validate-->
	<script src="jquery-validation/dist/jquery.validate.js"></script>
	<script>
     	
     	 $("#formWoof").validate();
    </script>
</body>
</html>