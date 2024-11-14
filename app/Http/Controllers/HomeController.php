<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index(Request $request)
    {
        //$request->session()->put(['Carlos'=>'Administrador']);
        //session(['Bami'=>'Estudiante']);
        //$request->session()->forget('Carlos');
        //$request->session()->flush();
        //$request->session()->flash('Entrada 3', 'Exito 3');
        //$request->session()->reflash('Entrada 4', 'Exito 4');
        //$request->session()->keep(['Carlos', 'Administrador']);
        $request->session()->regenerate();
        
        return $request->session()->all();
    }
}
