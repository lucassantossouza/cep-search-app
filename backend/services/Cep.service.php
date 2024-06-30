<?php

require_once 'entities/Cep.entity.php';
require_once 'dto/CepResponse.dto.php';

class CepService
{

  public function getCepData($cep)
  {
    $url = "https://viacep.com.br/ws/$cep/json/";
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    if (isset($data['erro'])) {
      return null;
    }

    $cepEntity = new Cep(
      $data['cep'],
      $data['logradouro'],
      $data['bairro'],
      $data['localidade'],
      $data['uf']
    );

    $address = "{$cepEntity->logradouro}, {$cepEntity->bairro}, {$cepEntity->localidade} - {$cepEntity->uf}";
    return new CepResponse($address);
  }
}
