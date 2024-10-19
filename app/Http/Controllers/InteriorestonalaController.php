<?php

namespace App\Http\Controllers;

use App\Models\interiorestonala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InteriorestonalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interiores = interiorestonala::orderBy('id','desc')->paginate();
        return view ('tonala.interiores_tonala.index', compact('interiores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tonala.interiores_tonala.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $interiores_tonala = interiorestonala::create($request->all());

        $interiores_tonala->img = $request->file('img')->store('img_interiores_tonala', 'public');

        $interiores_tonala->save();

        return redirect()->route('interiores_tonala.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(interiorestonala $interiorestonala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($interiores_tonala)
    {
        $interiores_tonala = interiorestonala::find($interiores_tonala);
        return view ('tonala.interiores_tonala.edit', compact('interiores_tonala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $interiores_tonala)
    {
        $interiores_tonala = interiorestonala::find($interiores_tonala);

        $interiores_tonala->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($interiores_tonala->img) {
                Storage::delete('public/' . $interiores_tonala->img);
            }
            // Almacenar la nueva imagen
            $interiores_tonala->img = $request->file('img')->store('img_interiores_tonala', 'public');
        }
        $interiores_tonala->save();
        return redirect()->route('interiores_tonala.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($interiores_tonala)
    {
        $interiores_tonala = interiorestonala::find($interiores_tonala);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($interiores_tonala) {
            // Obtiene la ruta de la imagen
            $imagePath = $interiores_tonala->img;

            // Elimina el registro de la base de datos
            $interiores_tonala->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('interiores_tonala.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('interiores_tonala.index')->with('error', 'Registro no encontrado.');
    }
}
