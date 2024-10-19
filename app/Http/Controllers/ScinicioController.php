<?php

namespace App\Http\Controllers;

use App\Models\scinicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ScinicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socios = scinicio::orderBy('id', 'desc')->paginate();
        return view ('editor.socios_inicio.index', compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('editor.socios_inicio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $socio = scinicio::create($request->all());

        $socio->img = $request->file('img')->store('img_socios_inicio', 'public');

        $socio->save();

        return redirect()->route('socios_inicio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(scinicio $scinicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($socio)
    {
        $socio = scinicio::find($socio);
        return view ('editor.socios_inicio.edit', compact('socio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $socio)
    {
        $socio = scinicio::find($socio);

        $socio->nombre = $request->nombre;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($socio->img) {
                Storage::delete('public/' . $socio->img);
            }
            // Almacenar la nueva imagen
            $socio->img = $request->file('img')->store('img_socios_inicio', 'public');
        }

        $socio->save();
        return redirect()->route('socios_inicio.index', $socio);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($socio)
    {
        // Encuentra el registro por su ID
        $socio = scinicio::find($socio);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($socio) {
            // Obtiene la ruta de la imagen
            $imagePath = $socio->img;

            // Elimina el registro de la base de datos
            $socio->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('socios_inicio.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('socios_inicio.index')->with('error', 'Registro no encontrado.');
    }
}
