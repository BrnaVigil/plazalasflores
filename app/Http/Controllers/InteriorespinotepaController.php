<?php

namespace App\Http\Controllers;

use App\Models\interiorespinotepa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class InteriorespinotepaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interiores = interiorespinotepa::orderBy('id','desc')->paginate();
        return view ('pinotepa.interiores_pnts.index', compact('interiores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pinotepa.interiores_pnts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $interiores_pnt = interiorespinotepa::create($request->all());

        $interiores_pnt->img = $request->file('img')->store('img_interiores_pinotepa', 'public');

        $interiores_pnt->save();

        return redirect()->route('interiores_pnts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(interiorespinotepa $interiorespinotepa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($interiores_pnt)
    {
        $interiores_pnt = interiorespinotepa::find($interiores_pnt);
        return view ('pinotepa.interiores_pnts.edit', compact('interiores_pnt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $interiores_pnt)
    {
        $interiores_pnt = interiorespinotepa::find($interiores_pnt);

        $interiores_pnt->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($interiores_pnt->img) {
                Storage::delete('public/' . $interiores_pnt->img);
            }
            // Almacenar la nueva imagen
            $interiores_pnt->img = $request->file('img')->store('img_interiores_pinotepa', 'public');
        }
        $interiores_pnt->save();
        return redirect()->route('interiores_pnts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($interiores_pnt)
    {
        $interiores_pnt = interiorespinotepa::find($interiores_pnt);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($interiores_pnt) {
            // Obtiene la ruta de la imagen
            $imagePath = $interiores_pnt->img;

            // Elimina el registro de la base de datos
            $interiores_pnt->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('interiores_pnts.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('interiores_pnts.index')->with('error', 'Registro no encontrado.');
    }
}
