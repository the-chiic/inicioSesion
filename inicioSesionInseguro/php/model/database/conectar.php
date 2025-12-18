<?php

	require_once __DIR__."/../../config/config.php";

	class Conectar{
		
		protected $conexion;
		
		public function __construct(){
			$this->crear();
		}
		
		public function __destruct(){
			if($this->conexion){
				$this->conexion->close();
			}
		}
		
		private function crear(){
			$this->conexion=new mysqli(SERVER,USER,PW,BBDD);
		}
	}

?>