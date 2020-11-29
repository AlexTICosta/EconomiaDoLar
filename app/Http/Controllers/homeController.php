<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Conta;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\contaFormRequest;

class homeController extends Controller
{
    private $conta;


    public function __construct(Conta $conta)
    {
        $this->conta = $conta;
    }


    public function index(){

        $dados = $this->conta->all();

        $title = 'Painél principal';
        return view('painel', compact('title', 'dados'));
    }

}
