<?php

namespace App\Http\Controllers;

use App\Models\Sorvete;


use Illuminate\Http\Request;

class SorvetesController extends Controller
{
    public function index()
    {
        $sorvetes = Sorvete::all();

        return view('sorvetes.index', compact('sorvetes'));
    }

    public function create()
    {
        return view('sorvetes.create');
    }

    public function store(Request $requisicao)
    {
        $sorvete = new Sorvete();

        $sorvete->nome = $requisicao->nome;
        $sorvete->sabor = $requisicao->sabor;
        $sorvete->valor = $requisicao->valor;

        $sorvete->save();

        return redirect()->route('sorvetes.show', $sorvete->id);
    }

    public function show(sorvete $sorvete)
    {
        return view('sorvetes.view', compact('sorvete'));
    }

}
