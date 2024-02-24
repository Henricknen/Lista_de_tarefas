<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;        // permite a ultilização do namespace do 'Controller.php'

class HomeController extends Controller {       // inserção do controller

    public function home() {

        $array = array(     // array do perfil do profissional
            'nome'=> 'Luis Henrique S F',
            'profissional'=> 'Full Stack',
            'pos'=> 'Desenvovimento Web',
            'graduacao'=> 'Análise e desenvolvimento de sistemas',
            'tecnico'=> 'Informatica para interner'
        );
        
        return view('home', $array);        // chamando 'view' home e 'enviando' array do perfil

    }

}