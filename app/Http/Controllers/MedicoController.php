<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medico;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Redirect;

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
    public function store(Request $request, Medico $medico)
    {
       

        $regras = [
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|min:11',
            'crm' => 'required|string|max:18'
        ];

        $feedback = [
            'required' => 'o campo ::attribute deve possuir um valor válido',
            'cpf.min' => 'O campo cpf deve ter no minimo 11 caracteres',
            'cpf.max' => 'O campo cpf deve ter no maximo 14 caracteres',
            'crm.max' => 'O campo crm deve ter no maximo 18 caracteres',
        ];

        $validar=$request->validate($regras, $feedback);

        if($validar == null){
            return  Redirect::route('inicio');
        }else{

            $medico->create($request->all());

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
    public function update(Request $request, Medico $medico)
    {
  
        $regras = [
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|min:11',
            'crm' => 'required|string|max:18'
        ];

        $feedback = [
            'required' => 'o campo ::attribute deve possuir um valor válido',
            'cpf.min' => 'O campo cpf deve ter no minimo 11 caracteres',
            'cpf.max' => 'O campo cpf deve ter no maximo 14 caracteres',
            'crm.max' => 'O campo crm deve ter no maximo 18 caracteres',
        ];

        $validar=$request->validate($regras, $feedback);

        if($validar == null){
            return  Redirect::route('update');
        }else{

            $medico->update($request->all());

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
