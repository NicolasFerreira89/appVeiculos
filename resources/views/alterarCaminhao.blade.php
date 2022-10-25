@extends('padrao')
@section('content')

<section>
<div class="container cadastroCaminhao">
<form class="row g-3" method="post" action="{{route('alterar-banco-caminhao',$registrosCaminhoes->id)}}">
  @csrf
  @method('put')
  <div class="col-md-12">
  
    <label for="inputModelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo',$registrosCaminhoes->modelo)}}" class="form-control" id="inputModelo" placeholder="Fusca">
    @error('modelo')
    <div class="text-sm-start text-light"> Preencher o campo "Modelo"</div>
    @enderror
  </div>
  
  <div class="col-12">
    <label for="inputMarca" class="form-label">Marca</label>
    <input type="text" name="marca" value="{{old('marca',$registrosCaminhoes->marca)}}" class="form-control" id="inputMarca" placeholder="VolksWagen">
    @error('marca')
    <div class="text-sm-start text-light"> Preencher o campo "Marca"</div>
    @enderror
  </div>
  <div class="col-12">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text" name="ano" value="{{old('ano',$registrosCaminhoes->ano)}}" class="form-control" id="inputAno" placeholder="0000">
    @error('ano')
    <div class="text-sm-start text-light"> Preencher o campo "Ano"</div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Cor</label>
    <input type="text" name="cor" value="{{old('cor',$registrosCaminhoes->cor)}}" class="form-control" id="inputCor" placeholder="000000-0000">
    @error('cor')
    <div class="text-sm-start text-light"> Preencher o campo "Cor"</div>
    @enderror
  </div>
 
  <div class="col-md-12">
    <label for="inputZip" class="form-label">Valor</label>
    <input type="text" name="valor" value="{{old('valor',$registrosCaminhoes->valor)}}" class="form-control" id="inputZip" placeholder="00.000,00">
    @error('valor')
    <div class="text-sm-start text-light"> Preencher o campo "Valor"</div>
    @enderror
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
</form>
</div>
</section>

@endsection
