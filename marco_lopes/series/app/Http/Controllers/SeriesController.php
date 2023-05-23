<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::get();

        $mensagem = $request->session()->get('mensagem');
        return view('series.index', compact('series', 'mensagem'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = $request->except("_token");

        Serie::create($serie, $request);

        $request->session()->flash('mensagem', "Série criada com sucesso ");

        return redirect()->route('list_series');
    }

    public function destroy(Request $request)
    {
        Serie::destroy($request->id);

        $request->session()->flash('mensagem', 'Série removida com sucesso.');
        return redirect('/series');
    }
}
