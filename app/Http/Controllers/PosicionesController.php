<?php

namespace App\Http\Controllers;

use App\Models\Posicion;
use App\Models\Equipo;
use Illuminate\Http\Request;

class PosicionesController extends Controller
{
    public function index()
    {
        $posiciones = Posicion::get();
        $equipos = Equipo::get();
        return view('posiciones', ['posicion' => $posiciones, 'equipo' => $equipos]);
        
    }

}
