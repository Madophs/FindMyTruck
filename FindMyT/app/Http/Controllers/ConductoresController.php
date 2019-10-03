<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conductor;

class ConductoresController extends Controller
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

    public function conductores(){
        $conductores = Conductor::ALL();
        return view('template.conductores')
        ->with('conductores', $conductores);
    }

    public function crear(){
        return view('template.conductores_crear');
    }

    public function guardar(Request $request){
        $conductor = new Conductor($request->all());
        $conductor->save();
        return redirect()->route('conductores')->with('success','Conductor creado correctamente');
    }

    public function eliminar($id){
        $exist = Conductor::find($id);
        if($exist != null){
            Conductor::destroy($id);
            return redirect()->route('conductores')->with('success', 'Conductore eliminado correctamente');
        }
        return redirect()->route('conductores')->with('error', 'El conductor no pudo eliminarse');
    }

    public function editar($id){
        $conductor = Conductor::find($id);
        if($conductor == null){
            return redirect()->route('conductores')->with('error','Conductor no encontrado');
        }
        return view('template.conductores_editar')->with('conductor', $conductor);
    }

    public function actualizar(Request $request){
        $conductor = Conductor::find($request->id);
        $conductor->nombre = $request->nombre;
        $conductor->correo = $request->correo;
        $conductor->telefono = $request->telefono;
        $conductor->domicilio = $request->domicilio;
        $conductor->save();
        return redirect()->route('conductores')->with('success','Conductor editado con exito');
    }
}

