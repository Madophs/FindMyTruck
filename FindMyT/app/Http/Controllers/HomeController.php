<?php

namespace App\Http\Controllers;

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
        return view('template.dashboard');
    }

    public function perfil(){
        return view('template.user');
    }

    public function vehiculos(){
        return view('template.vehiculos');
    }

    public function maps(){
        return view('template.maps');
    }

    public function polygons(){
        return view('template.polygon');
    }
}
