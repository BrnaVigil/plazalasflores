<?php

namespace App\Http\Controllers;

use App\Models\sociospalenque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SociospalenqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socios = sociospalenque::orderBy('id', 'desc')->paginate();
        return view ('palenque.socios_plqs.index', compact('socios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('palenque.socios_plqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $socios_plq = sociospalenque::create($request->all());

        $socios_plq->img = $request->file('img')->store('img_socios_palenque', 'public');

        $socios_plq->save();

        return redirect()->route('socios_plqs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(sociospalenque $sociospalenque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($socios_plq)
    {
        $socios_plq = sociospalenque::find($socios_plq);
        return view ('palenque.socios_plqs.edit', compact('socios_plq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $socios_plq)
    {
        $socios_plq = sociospalenque::find($socios_plq);

        $socios_plq->nombre = $request->nombre;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('img')) {
            // Eliminar la imagen actual si existe
            if ($socios_plq->img) {
                Storage::delete('public/' . $socios_plq->img);
            }
            // Almacenar la nueva imagen
            $socios_plq->img = $request->file('img')->store('img_socios_viaplaza', 'public');
        }

        $socios_plq->save();
        return redirect()->route('socios_plqs.index', $socios_plq);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($socios_plq)
    {
        $socios_plq = sociospalenque::find($socios_plq);

        if ($socios_plq) {
            $imagePath = $socios_plq->img;

            $socios_plq->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('socios_plqs.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('socios_plqs.index')->with('error', 'Registro no encontrado.');
    }
}
