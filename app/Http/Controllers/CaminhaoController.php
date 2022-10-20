<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caminhao;
use Illuminate\Support\Facades\Redirect;


class CaminhaoController extends Controller
{
    public function FormularioCadastro()
    {
        return view ('cadastrarCaminhao');
    }


    public function MostrarEditarCaminhao()
    {
        $dadosCaminhao = Caminhao::all(); 
        
        return view('editarCaminhao',['registrosCaminhao' =>$dadosCaminhao]);
        
    }

    public function SalvarBanco(Request $request)
    {
        $dadosCaminhao = $request->validate([
            'modelo'=> 'string|required',
            'marca'=> 'string|required',
            'ano'=> 'string|required',
            'cor'=> 'string|required',
            'valor'=> 'string|required'
        ]);

        Caminhao::create($dadosCaminhao); 

        return Redirect::route('home');
    }

    public function ApagarBancoCaminhao(Caminhao $registrosCaminhoes)
    {
        $registrosCaminhoes->delete();
        //dd($registrosCaminhoes);
        return Redirect::route('editar-caminhao');
    }

    public function MostrarAlterarCaminhao(Caminhao $registrosCaminhoes)
    {
        return view('alterarCaminhao',['registrosCaminhoes'=> registrosCaminhoes]);
    }
}

