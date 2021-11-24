<?php
 require_once 'templates/header.php'; 
 require_once '../database/data.php'; 

$objeto = new data();
$var = $objeto->conectar();

$query = $var->query("SELECT id_sucursal, nombre_sucursal, direccion, telefono FROM sucursales");
$query->execute();
$smt = $query->fetchAll(PDO::FETCH_ASSOC);

?>
	<body class="">


	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 menuDashboard">
				<?php require_once 'templates/menuDash.php'; ?>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-8">
				<br><h1 class="text-center">Datos de sucursales</h1>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 d-flex flex-row-reverse">
							<button class="btn btn-info"><i class="fas fa-plus"></i> Nueva sucursal</button>
						</div>
					</div>
				</div><br>
				<table class="table table-bordered text-center">
					<thead>
						<tr>
							<th>Nombre sucursal</th>
							<th>Dirección</th>
							<th>Teléfono</th>
							<th colspan="2">Acciones</th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($smt as $row){ ?>

							<tr>
								<td><?php echo $row['nombre_sucursal']?></td>
								<td><?php echo $row['direccion']?></td>
								<td><?php echo $row['telefono']?></td>
								<td><?php ?><button class="btn btn-outline-success"><i class="fas fa-sync-alt"></i></button></td>
								<td><?php ?><button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></button></td>
							</tr>

						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="col-lg-1"></div>
		</div>
	</div>

<br>

<?php require_once 'templates/footer.php' ?>




