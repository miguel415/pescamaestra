<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Crea una nueva instancia del controlador.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Muestra la página de inicio protegida.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }
}
