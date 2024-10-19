<?php

namespace App\Http\Controllers;

use App\Models\sociostonala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SociostonalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socios = sociostonala::orderBy('id', 'desc')->paginate();
        return view ('tonala.socios_tonala.index', compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tonala.socios_tonala.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $socios_tonala = sociostonala::create($request->all());

        $socios_tonala->img = $request->file('img')->store('img_socios_tonala', 'public');

        $socios_tonala->save();

        return redirect()->route('socios_tonala.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(sociostonala $sociostonala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($socios_tonala)
    {
        $socios_tonala = sociostonala::find($socios_tonala);
        return view ('tonala.socios_tonala.edit', compact('socios_tonala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $socios_tonala)
    {
        $socios_tonala = sociostonala::find($socios_tonala);

        $socios_tonala->nombre = $request->nombre;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($socios_tonala->img) {
                Storage::delete('public/' . $socios_tonala->img);
            }
            // Almacenar la nueva imagen
            $socios_tonala->img = $request->file('img')->store('img_socios_tonala', 'public');
        }

        $socios_tonala->save();
        return redirect()->route('socios_tonala.index', $socios_tonala);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($socios_tonala)
    {
        $socios_tonala = sociostonala::find($socios_tonala);

        if ($socios_tonala) {
            $imagePath = $socios_tonala->img;

            $socios_tonala->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('socios_tonala.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('socios_tonala.index')->with('error', 'Registro no encontrado.');
    }
}
