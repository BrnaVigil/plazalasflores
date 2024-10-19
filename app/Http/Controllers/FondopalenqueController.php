<?php

namespace App\Http\Controllers;

use App\Models\fondopalenque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FondopalenqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fondos = fondopalenque::orderBy('id','desc')->paginate();
        return view ('palenque.fondo_plqs.index', compact('fondos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('palenque.fondo_plqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fondo_plq = fondopalenque::create($request->all());

        $fondo_plq->img = $request->file('img')->store('img_fondo_palenque', 'public');

        $fondo_plq->save();

        return redirect()->route('fondo_plqs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(fondopalenque $fondopalenque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($fondo_plq)
    {
        $fondo_plq = fondopalenque::find($fondo_plq);
        return view ('palenque.fondo_plqs.edit', compact('fondo_plq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $fondo_plq)
    {
        $fondo_plq = fondopalenque::find($fondo_plq);

        $fondo_plq->desc = $request->desc;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($fondo_plq->img) {
                Storage::delete('public/' . $fondo_plq->img);
            }
            // Almacenar la nueva imagen
            $fondo_plq->img = $request->file('img')->store('img_fondo_palenque', 'public');
        }
        $fondo_plq->save();
        return redirect()->route('fondo_plqs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fondo_plq)
    {
        $fondo_plq = fondopalenque::find($fondo_plq);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($fondo_plq) {
            // Obtiene la ruta de la imagen
            $imagePath = $fondo_plq->img;

            // Elimina el registro de la base de datos
            $fondo_plq->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('fondo_plqs.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('fondo_plqs.index')->with('error', 'Registro no encontrado.');
    }
}
