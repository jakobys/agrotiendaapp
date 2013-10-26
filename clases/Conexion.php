<?php
// conectar
$m = new MongoClient();

// seleccionar una base de datos
$db = $m->agrotiendaapp;

// seleccionar una colección (equivalente a una tabla en una base de datos relacional)
$collection = $db->tendero;

// añadir un registro
$document = array( "_id" => "1", "nombres" => "Bill", 
				"apellidos" => "Watterson",
				"tienda" => "Nueva",
				"direccion" => "Nueva",
				"telefono" => ["sin"],
				"clave" => "unaclave" );

$collection->insert($document);

// encontrar todo lo que haya en la colección
$cursor = $collection->find();

// recorrer el resultado
foreach ($cursor as $document) {
    echo $document["apellidos"] . "\n";
}

?>