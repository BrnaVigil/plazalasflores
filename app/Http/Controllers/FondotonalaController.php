<?php

namespace App\Http\Controllers;

use App\Models\fondotonala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FondotonalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fondos = fondotonala::orderBy('id','desc')->paginate();
        return view ('tonala.fondo_tonala.index', compact('fondos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tonala.fondo_tonala.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fondo = fondotonala::create($request->all());

        $fondo->img = $request->file('img')->store('img_fondo_tonala', 'public');

        $fondo->save();

        return redirect()->route('fondo_tonala.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(fondotonala $fondotonala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($fondo)
    {
        $fondo = fondotonala::find($fondo);
        return view ('tonala.fondo_tonala.edit', compact('fondo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $fondo)
    {
        $fondo = fondotonala::find($fondo);

        $fondo->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($fondo->img) {
                Storage::delete('public/' . $fondo->img);
            }
            // Almacenar la nueva imagen
            $fondo->img = $request->file('img')->store('img_fondo_tonala', 'public');
        }
        $fondo->save();
        return redirect()->route('fondo_tonala.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fondo)
    {
        $fondo = fondotonala::find($fondo);

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

            return redirect()->route('fondo_tonala.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('fondo_tonala.index')->with('error', 'Registro no encontrado.');
    }
}
