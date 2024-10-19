<?php

namespace App\Http\Controllers;

use App\Models\interioresviaplaza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InterioresviaplazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interiores = interioresviaplaza::orderBy('id','desc')->paginate();
        return view ('viaplaza.interiores_vps.index', compact('interiores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('viaplaza.interiores_vps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $interiores_vp = interioresviaplaza::create($request->all());

        $interiores_vp->img = $request->file('img')->store('img_interiores_viaplaza', 'public');

        $interiores_vp->save();

        return redirect()->route('interiores_vps.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(interioresviaplaza $interioresviaplaza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($interiores_vp)
    {
        $interiores_vp = interioresviaplaza::find($interiores_vp);
        return view ('viaplaza.interiores_vps.edit', compact('interiores_vp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $interiores_vp)
    {
        $interiores_vp = interioresviaplaza::find($interiores_vp);

        $interiores_vp->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($interiores_vp->img) {
                Storage::delete('public/' . $interiores_vp->img);
            }
            // Almacenar la nueva imagen
            $interiores_vp->img = $request->file('img')->store('img_interiores_viaplaza', 'public');
        }
        $interiores_vp->save();
        return redirect()->route('interiores_vps.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($interiores_vp)
    {
        $interiores_vp = interioresviaplaza::find($interiores_vp);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($interiores_vp) {
            // Obtiene la ruta de la imagen
            $imagePath = $interiores_vp->img;

            // Elimina el registro de la base de datos
            $interiores_vp->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('interiores_vps.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('interiores_vps.index')->with('error', 'Registro no encontrado.');
    }
}
