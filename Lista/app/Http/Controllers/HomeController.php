<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;        // permite a ultilização do namespace do 'Controller.php'

use App\Lista;      // para 'ultilizar' o model

class HomeController extends Controller {       // inserção do controller

    public function home() {
        $lista = Lista::all();      // 'all' pega todos os registros do banco de dados

        $array = array('lista'=> $lista);       // jogando os registros pegos no array '$lista'
        
        return view('home', $array);        // view reçebendo o array '$lista'

    }

}