<?php 
namespace App\Classes;
class Livro{
    public $tamanho;
    public $tiragem;
    public $preco;

    public function __construct($tamanho, $tiragem){
        $this->$tamanho = $tamanho;
        $this->$tamanho = $tiragem;
    }
}