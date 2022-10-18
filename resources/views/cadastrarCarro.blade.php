@extends('padrao')
@section('content')

<section>
<div class="container cadastroCarro">
<form class="row g-3"method="post" action="{{route('salvar-banco-carro')}}">
  @csrf
  <div class="col-md-12">

    <label for="inputModelo" class="form-label">Modelo</label>
    <input type="text" name="modelo" value="{{old('modelo')}}" class="form-control" id="inputModelo" placeholder="Nome do Carro">
    @error('modelo')
    <div class="text-sm-start text-light"> Preencher o campo "Modelo"</div>
    @enderror
  </div>
  <div class="col-12">
    <label for="inputMarca" class="form-label">Marca</label>
    <input type="text" name="marca" value="{{old('marca')}}" class="form-control" id="inputMarca" placeholder="Nome da Marca">
    @error('marca')
    <div class="text-sm-start text-light"> Preencher o campo "Marca"</div>
    @enderror
  </div>
  <div class="col-12">
    <label for="inputaAno" class="form-label">Ano</label>
    <input type="text" name="ano" value="{{old('ano')}}" class="form-control" id="inputAno" placeholder="00/00/000">
    @error('ano')
    <div class="text-sm-start text-light"> Preencher o campo "Ano"</div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputCor" class="form-label">Cor</label>
    <input type="text" name="cor" value="{{old('cor')}}" class="form-control" id="inputCor" placeholder="Cor do Veículo">
    @error('cor')
    <div class="text-sm-start text-light"> Preencher o campo "Cor"</div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="inputValor" class="form-label">Valor</label>
    <input type="text" name="valor" value="{{old('valor')}}" class="form-control" id="inputValor" placeholder="R$:">
    @error('valor')
    <div class="text-sm-start text-light"> Preencher o campo "Valor"</div>
    @enderror
  </div>
  <div class="col-12">
  <button type="submit" class="btn btn-dark">Cadastrar</button>
  </div>
  
</form>


</div>    

</section>

@endsection