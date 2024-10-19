<?php

namespace App\Http\Controllers;

use App\Models\interiorespalenque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InteriorespalenqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interiores = interiorespalenque::orderBy('id','desc')->paginate();
        return view ('palenque.interiores_plqs.index', compact('interiores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('palenque.interiores_plqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $interiores_plq = interiorespalenque::create($request->all());

        $interiores_plq->img = $request->file('img')->store('img_interiores_palenque', 'public');

        $interiores_plq->save();

        return redirect()->route('interiores_plqs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(interiorespalenque $interiorespalenque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($interiores_plq)
    {
        $interiores_plq = interiorespalenque::find($interiores_plq);
        return view ('palenque.interiores_plqs.edit', compact('interiores_plq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $interiores_plq)
    {
        $interiores_plq = interiorespalenque::find($interiores_plq);

        $interiores_plq->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($interiores_plq->img) {
                Storage::delete('public/' . $interiores_plq->img);
            }
            // Almacenar la nueva imagen
            $interiores_plq->img = $request->file('img')->store('img_interiores_palenque', 'public');
        }
        $interiores_plq->save();
        return redirect()->route('interiores_plqs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($interiores_plq)
    {
        $interiores_plq = interiorespalenque::find($interiores_plq);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($interiores_plq) {
            // Obtiene la ruta de la imagen
            $imagePath = $interiores_plq->img;

            // Elimina el registro de la base de datos
            $interiores_plq->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('interiores_plqs.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('interiores_plqs.index')->with('error', 'Registro no encontrado.');
    }
}
