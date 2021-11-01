<?php require_once 'templates/header.php' ?>
<body class="">

<div class="container-fluid">
	<div class="row">		
		<div class="col-lg-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						
					</tr>
				</thead>

				<tbody>
					<?php foreach ($this->var_controller->mostrarReservas() as $k): ?>
						<tr>
							<td><?php echo $k->nombre_cliente; ?></td>
						</tr>
					<?php endforeach;  ?>
				</tbody>
			</table>
		</div>
	</div>	
</div>



<?php require_once 'templates/footer.php' ?>


