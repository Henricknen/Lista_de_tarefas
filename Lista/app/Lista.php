<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;      // chamando o 'eloquent'

class Lista extends Model {

    protected $table = 'Lista';     // espeçificando diretamente o nome da tabela
    public $timestamps = false;         // indica ao 'eloquent' que quando for feita uma 'inserção' ou um 'update de dados' não é necessario usar os requisitos de data

}