<?php
	class Controlador{
		// conectar
		private $m;
		// seleccionar una base de datos
		private $db;

		private $coleccion;
		function __construct($col=""){
			$this->m = new MongoClient();
			$this->db = $this->m->agrotiendaapp;
			$this->coleccion=$this->db->$col;
		}

		function __destruct(){
			unset($this->coleccion);
		}
		function insertar($obj){
			try{
				$this->coleccion->insert($obj);
			} catch(MongoCursorException $e) {
 			   echo "Error al insertar!\n";
			}
		}
	}
?>