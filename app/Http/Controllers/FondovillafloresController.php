<?php

namespace App\Http\Controllers;

use App\Models\fondovillaflores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FondovillafloresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fondos = fondovillaflores::orderBy('id','desc')->paginate();
        return view ('villaflores.fondo_vfs.index', compact('fondos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('villaflores.fondo_vfs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fondo_vf = fondovillaflores::create($request->all());

        $fondo_vf->img = $request->file('img')->store('img_fondo_villaflores', 'public');

        $fondo_vf->save();

        return redirect()->route('fondo_vfs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(fondovillaflores $fondovillaflores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($fondo_vf)
    {
        $fondo_vf = fondovillaflores::find($fondo_vf);
        return view ('villaflores.fondo_vfs.edit', compact('fondo_vf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $fondo_vf)
    {
        $fondo_vf = fondovillaflores::find($fondo_vf);

        $fondo_vf->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($fondo_vf->img) {
                Storage::delete('public/' . $fondo_vf->img);
            }
            // Almacenar la nueva imagen
            $fondo_vf->img = $request->file('img')->store('img_fondo_villaflores', 'public');
        }
        $fondo_vf->save();
        return redirect()->route('fondo_vfs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fondo_vf)
    {
        $fondo_vf = fondovillaflores::find($fondo_vf);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($fondo_vf) {
            // Obtiene la ruta de la imagen
            $imagePath = $fondo_vf->img;

            // Elimina el registro de la base de datos
            $fondo_vf->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('fondo_vfs.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('fondo_vfs.index')->with('error', 'Registro no encontrado.');
    }
}
