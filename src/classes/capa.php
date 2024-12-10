<?php 
namespace App\Classes;

use App\Interfaces\ValorCalculavel;
class Capa implements ValorCalculavel{
    private $tipoPapel;
    private $tamanhoOrelha;
    private $valor;

    public function __construct($tipoPapel, $cores) {
        $this->tipoPapel = $tipoPapel;
        $this->cores = $cores;
    }
}