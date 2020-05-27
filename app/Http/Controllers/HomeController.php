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

    public function update(Request $request, $id)
    {
        dd($request);
        // $user = User::find($id);
        // $requestData= $request->all();

        // $requestData['password'] = Hash::make($requestData['password']);
        // $user->update($requestData);
        // $user->update($request->all()); // Change : it was no password hash
        // return redirect(route('superadmin.admins.index'))->with('users', $this->getUsersbyRole('admin'));
    }
}
