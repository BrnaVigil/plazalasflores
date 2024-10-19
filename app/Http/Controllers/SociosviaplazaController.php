<?php

namespace App\Http\Controllers;

use App\Models\sociosviaplaza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SociosviaplazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socios = sociosviaplaza::orderBy('id', 'desc')->paginate();
        return view ('viaplaza.socios_vps.index', compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('viaplaza.socios_vps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $socios_vp = sociosviaplaza::create($request->all());

        $socios_vp->img = $request->file('img')->store('img_socios_viaplaza', 'public');

        $socios_vp->save();

        return redirect()->route('socios_vps.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(sociosviaplaza $sociosviaplaza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($socios_vp)
    {
        $socios_vp = sociosviaplaza::find($socios_vp);
        return view ('viaplaza.socios_vps.edit', compact('socios_vp'));        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $socios_vp)
    {
        $socios_vp = sociosviaplaza::find($socios_vp);

        $socios_vp->nombre = $request->nombre;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($socios_vp->img) {
                Storage::delete('public/' . $socios_vp->img);
            }
            // Almacenar la nueva imagen
            $socios_vp->img = $request->file('img')->store('img_socios_viaplaza', 'public');
        }

        $socios_vp->save();
        return redirect()->route('socios_vps.index', $socios_vp);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($socios_vp)
    {
        $socios_vp = sociosviaplaza::find($socios_vp);

        if ($socios_vp) {
            $imagePath = $socios_vp->img;

            $socios_vp->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('socios_vps.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('socios_vps.index')->with('error', 'Registro no encontrado.');

    }
}
