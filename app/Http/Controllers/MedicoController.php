<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medico;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Redirect;

use App\Http\Requests\StoreMedicoRequest;

use App\Http\Requests\UpdateMedicoRequest;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $medicos = new Medico();

        $medicos = $medicos->paginate(10);

        return view('show',['medicos' => $medicos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicoRequest $request, Medico $medico)
    {
       

        $validar=$request->validated();

        if($validar != null){ //caso a validação tenha dado certo, inserir

            $medico->create($validar);

            return  Redirect::route('home');
        }
    }


    public function show(string $id)
    {

        $medico = Medico::find($id);

        return view('update',['medico' => $medico]);
    }

    public function pesquisar($num)
    {

        if($num == 1){
         return view('pesquisar_cpf');
        }
        elseif($num == 2){
            return view('pesquisar_crm');
        }

    }

    public function pesquisarCPF(Request $request)
    {
        
        $medico = Medico::where('cpf', '=', $request->cpf)->first();

        if($medico != null){
            return view('pesquisar_cpf',['medico' => $medico]);
        }else{
            return view('pesquisar_cpf',['erro' => 'Médico não encontrado' ]);
        }

    }

    public function pesquisar_crm(Request $request)
    {

        $medico = Medico::where('crm', '=', $request->crm)->first();

        if($medico != null){
            return view('pesquisar_crm',['medico' => $medico]);
        }else{
            return view('pesquisar_crm',['erro' => 'Médico não encontrado' ]);
        }
        
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicoRequest $request, Medico $medico)
    {
  
        $validar=$request->validated();

        if($validar != null){ //caso a validação tenha dado certo, atualizar

            $medico->update($validar);

            return  Redirect::route('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $medico = Medico::find($id);

        $medico->delete();

        return  Redirect::route('home');
    }
}
