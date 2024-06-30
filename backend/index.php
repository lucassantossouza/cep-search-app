<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json');

require_once 'controllers/Cep.controller.php';

$controller = new CepController();
$controller->handleRequest();
