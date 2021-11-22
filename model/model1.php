<?php 
	
	require_once 'database/data.php';
	class model1{

		public $var_model;
		public $id_reserva;
		public $nombre_cliente;
		public $correo_electronico;
		public $nombre_sucursal;
		public $nombre_servicio;
		public $fecha_reserva;
		public $hora_reserva;
		public $comentarios;
		public $id_sucursal;
		public $id_servicio;
		//public $nombre_sucursal;
		//public $direccion;
		//public $telefono;

		public function __construct(){
			try {
				$this->var_model = new data();
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}


		public function mostrarReservas(){
			try {
				$query = "select r.id_reserva, r.nombre_cliente, r.correo_electronico, su.nombre_sucursal, se.nombre_servicio, r.fecha_reserva, r.hora_reserva, r.comentarios from reserva r inner join sucursales su on su.id_sucursal = r.id_sucursal inner join servicios se on se.id_servicio = r.id_servicio";
				$smt = $this->var_model->prepare($query);
				$smt->execute();
				return $smt->fetchAll(PDO::FETCH_OBJ);
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}


		public function mostrarSucursales(){
			try {
				$query = "select * from sucursales";
				$smt = $this->var_model->prepare($query);
				$smt->execute();
				return $smt->fetchAll(PDO::FETCH_OBJ);
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}







		

	}//end class

 ?>