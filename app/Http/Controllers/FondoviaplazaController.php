<?php

namespace App\Http\Controllers;

use App\Models\fondoviaplaza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FondoviaplazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fondos = fondoviaplaza::orderBy('id','desc')->paginate();
        return view ('viaplaza.fondo_vps.index', compact('fondos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('viaplaza.fondo_vps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fondo_vp = fondoviaplaza::create($request->all());

        $fondo_vp->img = $request->file('img')->store('img_fondo_viaplaza', 'public');

        $fondo_vp->save();

        return redirect()->route('fondo_vps.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(fondoviaplaza $fondoviaplaza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($fondo_vp)
    {
        $fondo_vp = fondoviaplaza::find($fondo_vp);
        return view ('viaplaza.fondo_vps.edit', compact('fondo_vp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $fondo_vp)
    {
        $fondo_vp = fondoviaplaza::find($fondo_vp);

        $fondo_vp->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($fondo_vp->img) {
                Storage::delete('public/' . $fondo_vp->img);
            }
            // Almacenar la nueva imagen
            $fondo_vp->img = $request->file('img')->store('img_fondo_viaplaza', 'public');
        }
        $fondo_vp->save();
        return redirect()->route('fondo_vps.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fondo_vp)
    {
        $fondo_vp = fondoviaplaza::find($fondo_vp);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($fondo_vp) {
            // Obtiene la ruta de la imagen
            $imagePath = $fondo_vp->img;

            // Elimina el registro de la base de datos
            $fondo_vp->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('fondo_vps.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('fondo_vps.index')->with('error', 'Registro no encontrado.');

    }
}
