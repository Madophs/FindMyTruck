<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo;

class VehiculosController extends Controller
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

    public function vehiculos(){
        $vehiculo = Vehiculo::ALL();
        return view('template.vehiculos')
        ->with('vehiculos', $vehiculo);
    }

    public function crear(){
        return view('template.vehiculos_crear');
    }

    public function guardar(Request $request){
        $vehiculo = new Vehiculo($request->all());
        $vehiculo->save();
        return redirect()->route('vehiculos')->with('success','Vehiculo guardado correctamente');
    }

    public function eliminar($id){
        $exist = Vehiculo::find($id);
        if($exist != null){
            Vehiculo::destroy($id);
            return redirect()->route('vehiculos')->with('success', 'Vehiculo dado de baja correctamente');
        }
        return redirect()->route('vehiculos')->with('error', 'El vehiculo no pudo eliminarse');
    }

    public function editar($id){
        $vehiculo = Vehiculo::find($id);
        if($vehiculo == null){
            return redirect()->route('vehiculos')->with('error','Vehiculo no encontrado');
        }
        return view('template.vehiculos_editar')->with('vehiculo', $vehiculo);
    }

    public function actualizar(Request $request){
        $vehiculo = Vehiculo::find($request->id);
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->color = $request->color;
        $vehiculo->anio = $request->anio;
        $vehiculo->no_placas = $request->no_placas;
        $vehiculo->save();
        return redirect()->route('vehiculos')->with('success','Vehiculo editado con exito');
    }
}
