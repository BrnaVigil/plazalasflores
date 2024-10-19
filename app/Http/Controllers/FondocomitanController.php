<?php

namespace App\Http\Controllers;

use App\Models\fondocomitan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FondocomitanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fondos = fondocomitan::orderBy('id','desc')->paginate();
        return view ('comitan.fondo.index', compact('fondos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('comitan.fondo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fondo = fondocomitan::create($request->all());

        $fondo->img = $request->file('img')->store('img_fondo_comitan', 'public');

        $fondo->save();

        return redirect()->route('fondo.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(fondocomitan $fondocomitan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($fondo)
    {
        $fondo = fondocomitan::find($fondo);
        return view ('comitan.fondo.edit', compact('fondo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $fondo)
    {
        $fondo = fondocomitan::find($fondo);

        $fondo->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($fondo->img) {
                Storage::delete('public/' . $fondo->img);
            }
            // Almacenar la nueva imagen
            $fondo->img = $request->file('img')->store('img_fondo_comitan', 'public');
        }
        $fondo->save();
        return redirect()->route('fondo.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fondo)
    {
        $fondo = fondocomitan::find($fondo);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($fondo) {
            // Obtiene la ruta de la imagen
            $imagePath = $fondo->img;

            // Elimina el registro de la base de datos
            $fondo->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('fondo.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('fondo.index')->with('error', 'Registro no encontrado.');
    }
        
}
