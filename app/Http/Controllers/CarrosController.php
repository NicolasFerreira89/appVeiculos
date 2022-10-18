<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carros;
use Illuminate\Support\Facades\Redirect;

class CarrosController extends Controller
{
    public function FormularioCarro()
    {
        return view('cadastrarCarro');
    }

    public function MostrarEditarCarro()
    {
        $dadosCarro = Carros::all();

        return view('editarCarro',['registrosCarro'=>$dadosCarro]);
    }

    public function SalvarBancoCarro(Request $request)
    {
        $dadosCarro = $request->validate([
            'modelo'=> 'string|required',
            'marca'=> 'string|required',
            'ano'=> 'string|required',
            'cor'=> 'string|required',
            'valor'=> 'string|required'
        ]);

        Carros::create($dadosCarro);
        return Redirect::route('home');
    }
}
