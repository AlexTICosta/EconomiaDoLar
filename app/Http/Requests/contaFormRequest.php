<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contaFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:150',
            'tipo' => 'required',
            'valor' => 'required|numeric',
            'parcelas'=> 'required',
            'datInicio'=> 'required',
            'datFim'=> 'required',
            'parcelasPagas'=> 'required',
            'detalhes' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é de preenchimento obrigatório',
            'tipo.required' => 'Tipo é obrigatório',
            'valor.required' => 'Valor é obrigatório',
            'parcelas.required'=> 'Parcelas é obrigatório',
            'datInicio.required'=> 'Data de início é obrigatório',
            'datFim.required'=> 'Data de Pagamento é obrigatório',
            'parcelasPagas.required'=> 'Parcelas Pagas é obrigatório',
            'detalhes.required' => 'Detalhe é obrigatório'

        ];
    }
}
