<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Consulta,Medico};

class MedicoController extends Controller
{
    //

    public function medicoDashboard(){

        $consultas = Consulta::get();

        return view('medico.index', compact('consultas'));
    }

   
}
