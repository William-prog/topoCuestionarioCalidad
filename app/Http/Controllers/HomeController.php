<?php

namespace App\Http\Controllers;
use Auth;
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

        $rol = Auth::user()->rol;
        
        if ($rol == 'cliente') {
            return view('formulario.create');
        } else if ($rol == 'admin') {
            return view('home');
        }
    }
}
