<?php

namespace App\Http\Controllers;

use App\Models\interiorescomitan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InteriorescomitanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interiores = interiorescomitan::orderBy('id','desc')->paginate();
        return view ('comitan.interiores.index', compact('interiores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('comitan.interiores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $interiore = interiorescomitan::create($request->all());

        $interiore->img = $request->file('img')->store('img_interiores_comitan', 'public');

        $interiore->save();

        return redirect()->route('interiores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(interiorescomitan $interiorescomitan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($interiore)
    {
        $interiore = interiorescomitan::find($interiore);
        return view ('comitan.interiores.edit', compact('interiore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $interiore)
    {
        $interiore = interiorescomitan::find($interiore);

        $interiore->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($interiore->img) {
                Storage::delete('public/' . $interiore->img);
            }
            // Almacenar la nueva imagen
            $interiore->img = $request->file('img')->store('img_interiores_comitan', 'public');
        }
        $interiore->save();
        return redirect()->route('interiores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($interiore)
    {
        $interiore = interiorescomitan::find($interiore);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($interiore) {
            // Obtiene la ruta de la imagen
            $imagePath = $interiore->img;

            // Elimina el registro de la base de datos
            $interiore->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('interiores.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('interiores.index')->with('error', 'Registro no encontrado.');
    }
}
