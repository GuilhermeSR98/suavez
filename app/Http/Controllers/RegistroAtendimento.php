<?php

namespace App\Http\Controllers;

use App\Models\Atendente;
use App\Models\ControleAtendente;
use Illuminate\Http\Request;

class RegistroAtendimento extends Controller
{
    public function index()
    {
        $atendentes = Atendente::get();
        $controleAtendente = ControleAtendente::first();

        return view('atendimento.index', compact('atendentes', 'controleAtendente'));
    }

    public function peguei()
    {
        $atendentes = Atendente::get();
        $controleAtendente = ControleAtendente::first();

        if ($atendentes->count() === $controleAtendente->indice_proximo + 1) {
            $controleAtendente->indice_atual = $controleAtendente->indice_proximo;
            $controleAtendente->indice_proximo = 0;
        } else {
            $controleAtendente->indice_atual = $controleAtendente->indice_proximo;
            $controleAtendente->indice_proximo = $controleAtendente->indice_proximo + 1;
        }

        /* $controleAtendente->indice_proximo = 1;
        $controleAtendente->indice_atual = 0; */


        $controleAtendente->save();

        return redirect('/')->with(compact('atendentes', 'controleAtendente'));
    }
}
