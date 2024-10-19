<?php

namespace App\Http\Controllers;

use App\Models\sociospinotepa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SociospinotepaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socios = sociospinotepa::orderBy('id', 'desc')->paginate();
        return view ('pinotepa.socios_pnts.index', compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pinotepa.socios_pnts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $socios_pnt = sociospinotepa::create($request->all());

        $socios_pnt->img = $request->file('img')->store('img_socios_pinotepa', 'public');

        $socios_pnt->save();

        return redirect()->route('socios_pnts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(sociospinotepa $sociospinotepa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($socios_pnt)
    {
        $socios_pnt = sociospinotepa::find($socios_pnt);
        return view ('pinotepa.socios_pnts.edit', compact('socios_pnt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $socios_pnt)
    {
        $socios_pnt = sociospinotepa::find($socios_pnt);

        $socios_pnt->nombre = $request->nombre;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($socios_pnt->img) {
                Storage::delete('public/' . $socios_pnt->img);
            }
            // Almacenar la nueva imagen
            $socios_pnt->img = $request->file('img')->store('img_socios_pinotepa', 'public');
        }

        $socios_pnt->save();
        return redirect()->route('socios_pnts.index', $socios_pnt);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($socios_pnt)
    {
        $socios_pnt = sociospinotepa::find($socios_pnt);

        if ($socios_pnt) {
            $imagePath = $socios_pnt->img;

            $socios_pnt->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('socios_pnts.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('socios_pnts.index')->with('error', 'Registro no encontrado.');
    }
}
