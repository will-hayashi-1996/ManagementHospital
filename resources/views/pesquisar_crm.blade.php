@extends('layouts.app')

@section('content')

 <div class="mb-3">

        <div style="position: absolute; top: 6%; left: 45%;" class="mb-3">

            <p class="pb-3" style="font-weight: bold;font-size: 18px;">Pesquisa de Médico por CRM</p>

        </div>

        <form  method="get" action="{{ route('pesquisar-crm') }}" style="width: 50%; margin-left: auto; margin-right: auto; ">
                @csrf
                <label for="name" class="form-label">CRM do Médico</label>
                <input type="text" class="form-control" name="crm" aria-describedby="emailHelp">
                 <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>

        @if(isset($erro))
               <p class="pb-3" style="position: absolute; top: 50%; left: 50%; font-weight: bold;font-size: 18px;"> {{ $erro}}</p>
        @endif

@if(isset($medico))


        <div class="table table-bordered mt-3">

            <div style="width: 90%; margin-left: auto; margin-right: auto; ">

            <table border="1" width="100%">
                <thead style="background-color: #CCCCCC;">
                    <tr>
                        <th cope="col">Nome</th>
                        <th cope="col">CPF</th>
                        <th cope="col">CRM</th>
                        <th cope="col"></th>
                        <th cope="col"></th>
                        <th cope="col"></th>
                    </tr>
                </thead>

                    <tbody>
                   
                        <tr  scope="row">
                            <td>{{$medico->nome}}</td>
                            <td>{{$medico->cpf}}</td>
                            <td>{{$medico->crm}}</td>
                            <td>
                                <form id="form_{{$medico->id}}" method="post" action="{{ route('medico.destroy', ['medico' => $medico->id ]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <!--<button type="submit">Excluir</button>-->
                                    <a href="#" onclick="document.getElementById('form_{{$medico->id}}').submit()">Excluir Médico</a>
                                </form>
                            </td>
                            <td><a href="{{ route('update', ['medico' => $medico->id , 'nome' => $medico->nome, 'cpf' => $medico->cpf, 'crm' => $medico->crm]) }}">Editar Médico</a></td>
                        </tr>

                    </tbody>
                </table>

                </div>
            </div>

        @endif

    </div>
    

@endsection
