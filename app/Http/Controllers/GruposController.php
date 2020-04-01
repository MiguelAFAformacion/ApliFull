<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grupo;

class GruposController extends Controller
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
            $grupos = Grupo::where('nombre', 'LIKE', '%' . $query . '%')
                    ->orderBy('id', 'asc')
                    ->paginate(10);
                    //->simplePaginate(5);

            return view('grupos.index', ['grupos' => $grupos, 'search' => $query]);

        }

    	// Esta sería una forma básica de hacerlo (sustituye a la anterior)
        // $grupos = Grupo::all();
        // return view('grupos.index', ['grupos' => $grupos]);
    }
}
