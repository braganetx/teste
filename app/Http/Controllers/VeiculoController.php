<?php

namespace FederalSt\Http\Controllers;

use FederalSt\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = Veiculo::all();

        return view('veiculos.index', compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validação de campos
        $request->validate([
            'placa' => 'required',
            'renavam' => 'required',
            'modelo' => 'required',
            'marca' => 'required',
            'ano' => 'required',
            'proprietario' => 'required'
        ]);

        $veiculo = new Veiculo([
            'placa' => $request->get('placa'),
            'renavam' => $request->get('renavam'),
            'modelo' => $request->get('modelo'),
            'marca' => $request->get('marca'),
            'ano' => $request->get('ano'),
            'proprietario' => $request->get('proprietario')
        ]);
        $veiculo->save();
        return redirect('/veiculos')->with('success', 'Veiculo Salvo com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculo = Veiculo::find($id);
        return view('veiculos.edit', compact('veiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validação de campos
        $request->validate([
            'placa' => 'required',
            'renavam' => 'required',
            'modelo' => 'required',
            'marca' => 'required',
            'ano' => 'required',
            'proprietario' => 'required'
        ]);

        $veiculo = Veiculo::find($id);
        $veiculo->placa =  $request->get('placa');
        $veiculo->renavam = $request->get('renavam');
        $veiculo->modelo = $request->get('modelo');
        $veiculo->marca = $request->get('marca');
        $veiculo->ano = $request->get('ano');
        $veiculo->proprietário = $request->get('proprietário');
        $veiculo->save();

        return redirect('/veiculos')->with('success', 'Veículo salvo com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veiculo = Veiculo::find($id);
        $veiculo->delete();

        return redirect('/veiculos')->with('success', 'Veículo deletedo!');
    }
}
