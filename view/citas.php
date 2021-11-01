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
		<div class="col-5">
			<form action="" autocomplete="off" id="formWoof" class="formWoof" method="POST">
				<br>
				<img src="../assets/images/logo1.svg" alt="Logo Veterinaria Woof" class="logo1">
				<p class="text-center">Una experiencia diferente, donde tu mascota es nuestra pasión</p>
				<br>
				<div>
					<label for="">Nombre completo:</label>
					 <input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="" class="form-control">
				</div>
				<div>
					<label for="">Nombre</label>
					
				</div>
				<div>
					<label for="">Correo electrónico:</label>
					 <input type="email" name="correo" id="correo" placeholder="" class="form-control">
					
				</div>
				<div class="row">
					<div class="col-lg-6">
						<label class="" >Sucursal de preferencia</label>	
						<select id="sucursal" name="sucursal" class="form-control"> 
					  	<option value="opción" selected = "selected" disabled>Seleccione una opción</option>
					    <option class="opcionSelect" value="Estadio Cuscatlán">Estadio Cuscatlán (Servicio 24/7)</option>
					    <option class="opcionSelect" value="Centro Comercial La Joya">Centro Comercial La Joya</option>
					    <option class="opcionSelect" value="Soyapango">Soyapango (Servicio 24/7)</option>
					    <option class="opcionSelect" value="Centro Comercial San Benito">Centro Comercial San Benito</option>
					    <option class="opcionSelect" value="Unicentro Metrópolis">Unicentro Metrópolis</option>
					  </select>			
					</div>
					<div class="col-lg-6">
						<label for="">Servicios</label>		
						<select id="servicios" name="servicios" placeholder="" class="form-control"> 
							<option value="opción" selected = "selected" disabled>Seleccione una opción</option>
							<option class="opcionSelect" value="Cirugía">Cirugía</option>
							<option class="opcionSelect" value="grooming">Grooming</option>
							   
						</select>		
					</div>
					
				</div>
					<div class="row">
						<div class="col-lg-6">
							<label class="" >Seleccione la fecha:</label>	
							<input type="date" class="form-control">		
						</div>
						<div class="col-lg-6">
							<label for="">Seleccione la hora</label>		
							<input type="time" class="form-control">
						</div>
					</div>
					<br>
					<div class="flexData">
						<div class="">
					  		<button id="btnEnviar" class="btn btn-info">
								Proceder a pagar
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
			</form>	
		</div>
	</div>
</div>





<?php require_once 'templates/footer.php' ?>


