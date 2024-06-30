<?php

require_once 'services/Cep.service.php';

class CepController
{

  private $cepService;

  public function __construct()
  {
    $this->cepService = new CepService();
  }

  public function handleRequest()
  {
    if (isset($_GET['cep'])) {
      $cep = $_GET['cep'];
      $cepResponse = $this->cepService->getCepData($cep);
      if ($cepResponse) {
        echo json_encode($cepResponse);
      } else {
        echo json_encode(["error" => "CEP não encontrado."]);
      }
    } else {
      echo json_encode(["error" => "CEP não fornecido."]);
    }
  }
}
