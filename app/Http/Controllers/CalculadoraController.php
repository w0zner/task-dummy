<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function __invoke($a, $b) {
        return view('calculadora', [
            'a' => $a,
            'b' => $b,
            'resultado' => $a + $b
        ]);
    }
}
