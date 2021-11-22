<?php require_once 'templates/header.php' ?>
<body class="bodyLogin">
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-sm-12 ol-sm-12">
				<form action="" class="formLogin" autocomplete="off">
					<div>
						<img src="../assets/images/logo1.svg" alt="" class="logo1">
						<p class="text-center">Una experiencia diferente, donde tu mascota es nuestra pasión</p>
					</div>
					<br>
					<div>
						<label for="" class="labelLogin">Usuario:</label>
						<input type="text" class="form-control" name="user">
					</div>
					<div>
						<label for="" class="labelLogin">Contraseña:</label>
						<input type="password" class="form-control" name="pass">
					</div>
					<br>
					<div>
						<input type="submit" class="btn btn-info" value="Iniciar sesión">
					</div>
				</form>
			</div>

			<div class="col-lg-6 col-sm-0 noneImage">
				<img src="../assets/images/petImage.jpg" alt="" class="img img-fluid img-responsive containerImgLogin">
			</div>
		</div>
	</div>





<?php require_once 'templates/footer.php' ?>