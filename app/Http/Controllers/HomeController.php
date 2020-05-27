<?php

namespace App\Http\Controllers;

use App\User;
use App\Zona;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ocupados = Zona::where('estado', '1')->get();
        $disponibles = Zona::where('estado', '0')->get();

        return view('home')->with([
            'disponibles'=> $disponibles,
            'ocupados'=> $ocupados
            ]);
    }
}
