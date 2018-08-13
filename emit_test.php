<?php 

	include ("vendor/autoload.php");


	use ElephantIO\Client;
	use ElephantIO\Engine\SocketIO\Version2X;

	$version = new Version2X('http://localhost:8000');

	$client = new Client($version);

	$client->initialize();
	$client->emit("nueva_orden", ["prueba"=>"prueba", "prueba1"=>"prueba1"]);
	$client->close();