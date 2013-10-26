<?php
	include("Tendero.php");
	include("Controlador.php");
	if(isset($_POST["btnGuardar"])){
		$controlador = new Controlador("tendero");
		$tendero = new Tendero();
		$tendero->setIdentificacion($_POST["txtIdentificacion"]);
		$tendero->setNombres($_POST["txtNombres"]);
		$tendero->setApellidos($_POST["txtApellidos"]);
		$tendero->setTienda($_POST["txtTienda"]);
		$tendero->setDireccion($_POST["txtDireccion"]);
		$tendero->setTelefono($_POST["txtTelefono"]);
		//$tendero->setClave($_POST["txtClave"]);
		$controlador->insertar($tendero->getTendero());
	}
?>