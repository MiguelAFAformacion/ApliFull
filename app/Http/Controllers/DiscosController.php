<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disco;

class DiscosController extends Controller
{
    /**
     * Mostrar una lista de los registros
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('search'));
            $discos = Disco::where('nombre', 'LIKE', '%' . $query . '%')
                    ->orderBy('id', 'asc')
                    ->paginate(10);
                    //->simplePaginate(5);

            return view('discos.index', ['discos' => $discos, 'search' => $query]);

        }

    	// Esta sería una forma básica de hacerlo (sustituye a la anterior)
        // $grupos = Grupo::all();
        // return view('grupos.index', ['grupos' => $grupos]);
    }
}
