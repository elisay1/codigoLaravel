<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    //TODO: aca lo agregamos manuealmente el controller
    public function servicios() {
        $servicios = [
            ['titulo' => 'Servicio 01'],
            ['titulo' => 'Servicio 02'],
            ['titulo' => 'Servicio 03'],
            ['titulo' => 'Servicio 04'],
            ['titulo' => 'Servicio 05'],
        ];
        return view('menu.servicios', compact('servicios'));
    }
}
