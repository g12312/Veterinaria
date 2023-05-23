<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcercaController extends Controller
{
    /*
     * Devuelve la vista desde el menu acerca
     *
     * @param void
     * @return \illuminate\View\View
     */
    public function sobre_acerca()
    {
        return view('acerca');
    }
}
