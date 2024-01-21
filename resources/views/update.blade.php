@extends('layouts.app')

@section('content')
<form style="width:50%; position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%);"  method="post" action="{{ route('medico.update', ['medico' => $medico->id ]) }}">
    
  <div class="mb-3" >
    @csrf
    @method('PUT')
    <label for="name" class="form-label">Nome do Médico</label>
    <input type="text" class="form-control" name="nome" value="{{$medico->nome ?? old('nome')}}">
     {{ $errors->has('nome') ? $errors->first('nome') : ''}}
  </div>
    <div class="mb-3">
    <label for="cpf" class="form-label">CPF do Médico</label>
    <input type="text" class="form-control" name="cpf" value="{{$medico->cpf ?? old('cpf')}}">
     {{ $errors->has('cpf') ? $errors->first('cpf') : ''}}
  </div>
  <div class="mb-3">
    <label for="crm" class="form-label">CRM do Médico</label>
    <input type="text" class="form-control" name="crm" value="{{$medico->crm ?? old('crm')}}">
     {{ $errors->has('crm') ? $errors->first('crm') : ''}}
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
