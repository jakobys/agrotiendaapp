<?php
	class Tendero{
		private $identificacion;
		private $nombres;
		private $apellidos;
		private $tienda;
		private $direccion;
		private $telefono;
		private $clave;

		function __construct(){
			$this->identificacion="";
			$this->nombres="";
			$this->apellidos="";
			$this->tienda="";
			$this->direccion="";
			$this->telefono="";
			$this->clave="";
		}

		function __destruct(){
			unset($this->identificacion);
			unset($this->nombres);
			unset($this->apellidos);
			unset($this->tienda);
			unset($this->direccion);
			unset($this->telefono);
			unset($this->clave);
		}

		function setIdentificacion($id){
			if(strlen($id)>0){
				$this->identificacion = $id;
			}
		}

		function setNombres($nom){
			if(strlen($nom)>0){
				$this->nombres = $nom;
			}
		}

		function setApellidos($ape){
			if(strlen($ape)>0){
				$this->apellidos=$ape;
			}
		}

		function setTienda($tie){
			if(strlen($tie)>0){
				$this->tienda=$tie;
			}
		}

		function setDireccion($dir){
			if(strlen($dir)>0){
				$this->direccion=$dir;
			}
		}

		function setClave($cla){
			if(strlen($cla)>0){
				$this->clave=md5($cla);
			}
		}

		function setTelefono($tel){
			if(strlen($tel)>0){
				$this->telefono=$tel;
			}
		}

		function getNombres(){
			return $this->nombres;
		}

		function getApellidos(){
			return $this->apellidos;
		}

		function getIdentificacion(){
			return $this->identificacion;
		}

		function getTienda(){
			return $this->tienda;
		}

		function getDireccion(){
			return $this->direccion;
		}

		function getTelefono(){
			return $this->telefono;
		}

		function getClave(){
			return md5($this->clave);
		}

		function getTendero(){
			return array("_id"=>$this->getIdentificacion(),
						 "nombres"=>$this->getNombres(),
						 "apellidos"=>$this->getApellidos(),
						 "tienda"=>$this->getTienda(),
						 "direccion"=>$this->getDireccion(),
						 "telefono"=>$this->getTelefono(),
						 "clave"=>$this->getClave());
		}
	}
?>