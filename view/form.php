<?php require_once 'templates/header.php' ?>
<body class="body">

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-1 redesSociales">
			<ul>
	  			<li><a href="https://www.facebook.com/woofvet" class="ancla"><i class="fab fa-facebook-f iconRedes indexIcon"></i></a></li>
	  			<li><a href="https://www.instagram.com/woof_vet/" class="ancla"><i class="fab fa-instagram iconRedes"></i></a></li>
	  			<li><a href="https://veterinariaswoof.com/" class="ancla"><i class="fas fa-globe iconRedes"></i></a></li>
	  		</ul>
		</div>
		<div class="col-lg-3"></div>
		<div class="col-lg-5">
			<form autocomplete="off" id="formWoof" class="formWoof" method="POST">
				<br>
				<img src="../assets/images/logo1.svg" alt="Logo Veterinaria Woof" class="logo1">
				<p class="text-center">Una experiencia diferente, donde tu mascota es nuestra pasión</p>
				<br>
				<div>
					<label for="">Nombre completo:</label>
					<input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario">
				</div>

				<div>
				 <label>Correo electrónico:</label>
					  <input type="email" name="correo" id="correo" placeholder="" class="form-control">
				</div>

				<div>
				 <label>Sucursal de preferencia:</label>
					  <select id="sucursal" name="sucursal" placeholder="" class="form-control"> 
					  	<option value="opción" selected = "selected" disabled>Seleccione una opción</option>
					    <option class="opcionSelect" value="Estadio Cuscatlán">Estadio Cuscatlán (Servicio 24/7)</option>
					    <option class="opcionSelect" value="Centro Comercial La Joya">Centro Comercial La Joya</option>
					    <option class="opcionSelect" value="Soyapango">Soyapango (Servicio 24/7)</option>
					    <option class="opcionSelect" value="Centro Comercial San Benito">Centro Comercial San Benito</option>
					    <option class="opcionSelect" value="Unicentro Metrópolis">Unicentro Metrópolis</option>
					  </select>
				</div>
				<div>
					<label for="">Escríbenos tus dudas, consultas o sugerencias</label>
					<textarea name="descripcion" id="descripcion" class="form-control"></textarea>
				</div>
				<br>
				<div class="flexData">
					<button id="btnEnviar" class="btn btn-success">
						<i class="fab fa-whatsapp"></i> Enviar datos
					</button>
				 
					 <div class="ocultar">					  	
						<ul class="lista2">
						  	<li class="item2"><a href="https://www.facebook.com/woofvet" class="ancla"><i class="fab fa-facebook-f iconRedes2"></i></a></li>
						  	<li class="item2"><a href="https://www.instagram.com/woof_vet/" class="ancla"><i class="fab fa-instagram iconRedes2"></i></a></li>
						  	<li class="item2"><a href="https://veterinariaswoof.com/" class="ancla"><i class="fas fa-globe iconRedes2"></i></a></li>
						</ul>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-3"></div>
	</div>
</div>







<?php require_once 'templates/footer.php' ?>


