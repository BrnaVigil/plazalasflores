<?php

namespace App\Http\Controllers;

use App\Models\fondopinotepa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FondopinotepaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fondos = fondopinotepa::orderBy('id','desc')->paginate();
        return view ('pinotepa.fondo_pnts.index', compact('fondos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pinotepa.fondo_pnts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fondo_pnt = fondopinotepa::create($request->all());

        $fondo_pnt->img = $request->file('img')->store('img_fondo_pinotepa', 'public');

        $fondo_pnt->save();

        return redirect()->route('fondo_pnts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(fondopinotepa $fondopinotepa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($fondo_pnt)
    {
        $fondo_pnt = fondopinotepa::find($fondo_pnt);
        return view ('pinotepa.fondo_pnts.edit', compact('fondo_pnt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $fondo_pnt)
    {
        $fondo_pnt = fondopinotepa::find($fondo_pnt);

        $fondo_pnt->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($fondo_pnt->img) {
                Storage::delete('public/' . $fondo_pnt->img);
            }
            // Almacenar la nueva imagen
            $fondo_pnt->img = $request->file('img')->store('img_fondo_pinotepa', 'public');
        }
        $fondo_pnt->save();
        return redirect()->route('fondo_pnts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fondo_pnt)
    {
        $fondo_pnt = fondopinotepa::find($fondo_pnt);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($fondo_pnt) {
            // Obtiene la ruta de la imagen
            $imagePath = $fondo_pnt->img;

            // Elimina el registro de la base de datos
            $fondo_pnt->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('fondo_pnts.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('fondo_pnts.index')->with('error', 'Registro no encontrado.');

    }
}
