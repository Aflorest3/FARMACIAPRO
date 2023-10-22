<?php

namespace App\Http\Controllers;

use App\Models\Medicinas;
use Illuminate\Http\Request;

class MedicinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Medicinas::orderBy('nombre','desc')->paginate(3);
        return view('inicio',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medicinas= new Medicinas();
        $medicinas->nombre = $request->post('nombre');
        $medicinas->precio = $request->post('precio');
        $medicinas->cantidad = $request->post('cantidad');
        $medicinas->descripcion = $request->post('descripcion');
        $medicinas->fecha_cad = $request->post('fecha_cad');
        $medicinas->presentacion = $request->post('presentacion');
        $medicinas-> save();
        return redirect()-> route("medicinas.index")-> with("success","agregado con exito");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $medicinas = Medicinas::find($id);
    
        return view("eliminar", compact('medicinas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $medicinas= Medicinas::find($id);
    
        return view("actualizar", compact('medicinas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $medicinas = Medicinas::find($id);
        $medicinas->nombre = $request->post('nombre');
        $medicinas->precio = $request->post('precio');
        $medicinas->cantidad = $request->post('cantidad');
        $medicinas->descripcion = $request->post('descripcion');
        $medicinas->fecha_cad = $request->post('fecha_cad');
        $medicinas->presentacion = $request->post('presentacion');
        $medicinas-> save();
        return redirect()-> route("medicinas.index")-> with("success","actualizado con exito");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $medicinas = Medicinas::find($id);
        $medicinas->delete();
        return redirect()-> route("medicinas.index")->with("success","eliminado con exito");
    }
}
