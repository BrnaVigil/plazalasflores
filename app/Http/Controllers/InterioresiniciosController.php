<?php

namespace App\Http\Controllers;

use App\Models\interioresinicios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InterioresiniciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interiores = interioresinicios::orderBy('id','desc')->paginate();
        return view ('editor.interiores_inicios.index', compact('interiores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('editor.interiores_inicios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $interiores_inicio = interioresinicios::create($request->all());

        $interiores_inicio->img = $request->file('img')->store('img_interiores_inicio', 'public');

        $interiores_inicio->save();

        return redirect()->route('interiores_inicios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(interioresinicios $interioresinicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($interiores_inicio)
    {
        $interiores_inicio = interioresinicios::find($interiores_inicio);
        return view ('editor.interiores_inicios.edit', compact('interiores_inicio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $interiores_inicio)
    {
        $interiores_inicio = interioresinicios::find($interiores_inicio);

        $interiores_inicio->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($interiores_inicio->img) {
                Storage::delete('public/' . $interiores_inicio->img);
            }
            // Almacenar la nueva imagen
            $interiores_inicio->img = $request->file('img')->store('img_interiores_inicio', 'public');
        }
        $interiores_inicio->save();
        return redirect()->route('interiores_inicios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($interiores_inicio)
    {
        $interiores_inicio = interioresinicios::find($interiores_inicio);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($interiores_inicio) {
            // Obtiene la ruta de la imagen
            $imagePath = $interiores_inicio->img;

            // Elimina el registro de la base de datos
            $interiores_inicio->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('interiores_inicios.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('interiores_inicios.index')->with('error', 'Registro no encontrado.');

    }
}
