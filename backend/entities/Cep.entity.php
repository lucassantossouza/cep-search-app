<?php

class Cep
{
  public $cep;
  public $logradouro;
  public $bairro;
  public $localidade;
  public $uf;

  public function __construct($cep, $logradouro, $bairro, $localidade, $uf)
  {
    $this->cep = $cep;
    $this->logradouro = $logradouro;
    $this->bairro = $bairro;
    $this->localidade = $localidade;
    $this->uf = $uf;
  }
}
