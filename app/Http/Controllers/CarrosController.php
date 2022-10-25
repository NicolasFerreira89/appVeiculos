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

    public function MostrarEditarCarro(Request $request)
    {
        //$dadosCarro = Carros::all();
        $dadosCarro = Carros::query();
        $dadosCarro->when($request->marca,function($query, $valor)
        {
            $query->where('marca','like','%'.$valor.'%');
        });

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

    public function ApagarCarro(Carros $registrosCarros)
    {
        $registrosCarros->delete();
        return Redirect::route('editar-carro');
    }

    public function MostrarAlterarCarro(Carros $registrosCarros)
    {
        return view('alterarCarro',['registrosCarros'=> $registrosCarros]);
    }

    public function AlterarBancoCarro(Carros $registrosCarros, Request $request)
    {
        $bancoCarro = $request->validate([
            'modelo'=> 'string|required',
            'marca'=> 'string|required',
            'ano'=> 'string|required',
            'cor'=> 'string|required',
            'valor'=> 'string|required'
        ]);

        $registrosCarros->fill($bancoCarro);
        $registrosCarros->save();

        return view('editar-carro');
    }

}
