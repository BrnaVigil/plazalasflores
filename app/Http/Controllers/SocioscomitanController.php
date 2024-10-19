<?php

namespace App\Http\Controllers;

use App\Models\socioscomitan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SocioscomitanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socios = socioscomitan::orderBy('id', 'desc')->paginate();
        return view ('comitan.socios.index', compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('comitan.socios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $socio = socioscomitan::create($request->all());

        $socio->img = $request->file('img')->store('img_socios_comitan', 'public');

        $socio->save();

        return redirect()->route('socios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(socioscomitan $socioscomitan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($socio)
    {
        $socio = socioscomitan::find($socio);
        return view ('comitan.socios.edit', compact('socio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $socio)
    {
        $socio = socioscomitan::find($socio);

        $socio->nombre = $request->nombre;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($socio->img) {
                Storage::delete('public/' . $socio->img);
            }
            // Almacenar la nueva imagen
            $socio->img = $request->file('img')->store('img_socios_comitan', 'public');
        }

        $socio->save();
        return redirect()->route('socios.index', $socio);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($socio)
    {
        $socio = socioscomitan::find($socio);

        if ($socio) {
            $imagePath = $socio->img;

            $socio->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('socios.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('socios.index')->with('error', 'Registro no encontrado.');
    }
}
