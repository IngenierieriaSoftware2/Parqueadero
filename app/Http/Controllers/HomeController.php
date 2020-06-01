<?php

namespace App\Http\Controllers;

use App\User;
use App\Zona;
use App\Cliente;
use Carbon\Carbon;
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

    public function update(Request $request, $idZona)
    {
        // dd($request); 
        $zona = Zona::find($idZona);
        $zona->estado = $request->estado;
        
        if ($request->estado == '1') { // Si se solicita ocupar
            $newCliente = new Cliente();
            $newCliente->placa = $request->placa;
            $newCliente->tarifa = 1500;
            $newCliente->hora_ingreso = now();
            $newCliente->save();
            $zona->cliente_id = $newCliente->id;
            $zona->update();
            // dd($zona->cliente->cliente_id );
            
        } elseif ($request->estado == '0') { // Si se solicita desocupar
            $zona->cliente->hora_salida = now();

            $startTime = Carbon::parse($zona->cliente->hora_ingreso);
            $endTime = Carbon::parse(now());

            $totalDuration = $endTime->diffForHumans($startTime);
            dd($totalDuration);
            
        }
        
        $zona->update();

        return redirect(route('home'));
    }
}
