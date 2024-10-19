<?php

namespace App\Http\Controllers;

use App\Models\interioresvillaflores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class InterioresvillafloresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interiores = interioresvillaflores::orderBy('id','desc')->paginate();
        return view ('villaflores.interiores_vfs.index', compact('interiores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('villaflores.interiores_vfs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $interiores_vf = interioresvillaflores::create($request->all());

        $interiores_vf->img = $request->file('img')->store('img_interiores_villaflores', 'public');

        $interiores_vf->save();

        return redirect()->route('interiores_vfs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(interioresvillaflores $interioresvillaflores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($interiores_vf)
    {
        $interiores_vf = interioresvillaflores::find($interiores_vf);
        return view ('villaflores.interiores_vfs.edit', compact('interiores_vf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $interiores_vf)
    {
        $interiores_vf = interioresvillaflores::find($interiores_vf);

        $interiores_vf->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($interiores_vf->img) {
                Storage::delete('public/' . $interiores_vf->img);
            }
            // Almacenar la nueva imagen
            $interiores_vf->img = $request->file('img')->store('img_interiores_villaflores', 'public');
        }
        $interiores_vf->save();
        return redirect()->route('interiores_vfs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($interiores_vf)
    {
        $interiores_vf = interioresvillaflores::find($interiores_vf);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($interiores_vf) {
            // Obtiene la ruta de la imagen
            $imagePath = $interiores_vf->img;

            // Elimina el registro de la base de datos
            $interiores_vf->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('interiores_vfs.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('interiores_vfs.index')->with('error', 'Registro no encontrado.');
        
    }
}
