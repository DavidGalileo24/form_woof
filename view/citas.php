<?php include_once('templates/header.php'); ?>

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


				      <div class="grid-container">
					    <div class="grid-x grid-padding-x">
					      <div class="medium-6 cell">
					       	<label>Seleccione la fecha:
					       		<input type="date" required />
						 
							</label>
					      </div>
					       <div class="medium-6 cell">
					       		<label>Seleccione la hora:
									<input type="time" required />
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
	

	<?php include_once('templates/footer.php'); ?>


