<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContasCrudController extends Controller
{
    private $conta;

    public function __construct(Conta $conta)
    {
        $this->conta = $conta;
    }


    /**
     * Display the specified resource.
     * @param int $id
     * @return string
     */
    public function deleteConta($id)
    {
        $contaDeletada = $this->conta->find($id)->delete();
        if ($contaDeletada) {
            $deletadaTexto = "Conta Deletada com Sucesso!";
            return view('contaDeletadaAlerta', compact('deletadaTexto'));
        }
        else {
            $deletadaTexto = "Ops! Ocorreu um erro. Tente novamente";
            return view('contaDeletadaAlerta', compact('deletadaTexto'));
        }

    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return string
     */
    public function getConta($id)
    {
        $title = 'Deleta Conta';
        $deletada = $this->conta->find($id);
        return view('contaDeletada', compact('title','deletada'));
    }

    public function getContaMes()
    {
        $mes = date('Y-m');
        $total = 0;
        $title = 'Contas Mês';
        $contas = $this->conta->where('datInicio','LIKE', '%'.$mes.'%')->get();
        foreach ($contas as $val){
            $total += $val->valor;
        }
        return view('contaMes', compact('title','contas', 'total','mes'));
    }
}
