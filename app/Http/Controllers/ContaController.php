<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Conta;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\contaFormRequest;


class ContaController extends Controller
{
    private $conta;


    public function __construct(Conta $conta)
    {
        $this->conta = $conta;
    }


    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index()
    {
        $total = 0;
        $title = 'Contas Geral';
        $contas = $this->conta->all();
        foreach ($contas as $val){
            $total += $val->valor;
        }
        return view('apresentaContas', compact('title','contas', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function create()
    {
        $tipo = ['Fixo mensal','Alimentação','Vestuário','Combustivél','Gasto diversos','Cartão de Crédito','Prestação da Casa'];
        $title = "Cadastro de conta";
        return view('cadastro', compact('title','tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return string
     */
    public function store(contaFormRequest $request)
    {
       $dados = $request->except('_token');
       $insert = $this->conta->insert($dados);

       if ($insert){
           return view('contaCadastrada', compact('dados'));
       }
       else{
           return redirect()->back();
       }


    }

    /**
     * Display the specified resource.
     * @param int $id
     * @param int $del
     * @return string
     */
    public function show($id)
    {
        $title = "Atualiza Conta";
        $getconta = $this->conta->find($id);
        return view('alteraConta', compact('getconta', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Response $request
     * @return string
     */
    public function edit(Response $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *@param $id
     * @param Request $request
     * @return string
     */
    public function update(Request $request, $id)
    {
        $dados = $this->conta->find($id);
        $update = $this->conta->where('id',$id)->update($request->except('_token','_method'));

        if ($update){
            return view('contaAtualizada', compact('dados'));
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return string
     */
    public function destroy($id)
    {
        $dados = $this->conta->find($id);
        $delete = $dados->delete();
        if ($delete){
            return view('contaDeletadaAlerta', compact('dados'));
        }
        else{
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return string
     */
    public function getConta($id)
    {
        $title = 'Alterar Conta';
        $contaAlterar = DB::table('contas')->where('id','=',$id)->get();
        return view('alteraConta', compact('title','contaAlterar'));
    }
}
