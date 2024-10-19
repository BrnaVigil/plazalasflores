<?php

namespace App\Http\Controllers;

use App\Models\sociosvillaflores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class SociosvillafloresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socios = sociosvillaflores::orderBy('id', 'desc')->paginate();
        return view ('villaflores.socios_vfs.index', compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('villaflores.socios_vfs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $socios_vf = sociosvillaflores::create($request->all());

        $socios_vf->img = $request->file('img')->store('img_socios_villaflores', 'public');

        $socios_vf->save();

        return redirect()->route('socios_vfs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(sociosvillaflores $sociosvillaflores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($socios_vf)
    {
        $socios_vf = sociosvillaflores::find($socios_vf);
        return view ('villaflores.socios_vfs.edit', compact('socios_vf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $socios_vf)
    {
        $socios_vf = sociosvillaflores::find($socios_vf);

        $socios_vf->nombre = $request->nombre;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($socios_vf->img) {
                Storage::delete('public/' . $socios_vf->img);
            }
            // Almacenar la nueva imagen
            $socios_vf->img = $request->file('img')->store('img_socios_villaflores', 'public');
        }

        $socios_vf->save();
        return redirect()->route('socios_vfs.index', $socios_vf);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($socios_vf)
    {
        $socios_vf = sociosvillaflores::find($socios_vf);

        if ($socios_vf) {
            $imagePath = $socios_vf->img;

            $socios_vf->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('socios_vfs.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('socios_fvs.index')->with('error', 'Registro no encontrado.');
    }
}
