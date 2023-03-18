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

}
