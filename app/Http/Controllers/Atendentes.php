<?php

namespace App\Http\Controllers;

use App\Models\Atendente;
use App\Models\ControleAtendente;
use Illuminate\Http\Request;

class Atendentes extends Controller
{
    public function index()
    {
        $atendentes = Atendente::all();

        return view('atendentes.index', compact('atendentes'));
    }

    public function create()
    {
        return view('atendentes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        Atendente::create([
            'nome' => $request->input('nome'),
        ]);

        $controleAtendente = ControleAtendente::first();

        $controleAtendente->indice_proximo = 1;
        $controleAtendente->indice_atual = 0;


        $controleAtendente->save();

        return redirect()->route('atendente.index')->with('success', 'Atendente removido com sucesso!');
    }

    public function destroy(string $id)
    {
        $atendente = Atendente::findOrFail($id);
        $atendente->delete();

        $controleAtendente = ControleAtendente::first();

        $controleAtendente->indice_proximo = 1;
        $controleAtendente->indice_atual = 0;


        $controleAtendente->save();

        return redirect()->route('atendente.index')->with('success', 'Atendente removido com sucesso!');
    }
}
