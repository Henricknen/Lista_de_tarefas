<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;        // permite a ultilização do namespace do 'Controller.php'
use Illuminate\Http\Request;        // biblioteca 'Request' permite reçeber dados vindos de requisições
use App\Lista;      // para 'ultilizar' o model

class HomeController extends Controller {       // inserção do controller

    public function home() {            // 'action' home
        $lista = Lista::all();      // 'all' pega todos os registros do banco de dados

        $array = array('lista'=> $lista);       // jogando os registros pegos no array '$lista'
        
        return view('home', $array);        // view reçebendo o array '$lista'

    }

    public function add(Request $req) {
        if($req-> has('item')) {        // verifica se tem o campo 'item'
            $item = $req-> input('item');       // pega o dado que foi enviado

            $lista = new lista;     // criação do 'objeto' $lista
            $lista-> item = $item;      // inserindo dado no objeto criado
            $lista-> save();
        }
        
        return redirect('/');       // se não encontrar o 'item' redireçionará para página inçial
    }

    public function del($id) {      // action del reçebendo como parâmetro o 'id' que será deletado
        Lista::find($id)-> delete();        // 'find' encontra um registro com base no id e 'delete' exclui o registro encontrado

        return redirect('/');
    }

}