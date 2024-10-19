<?php

namespace App\Http\Controllers;

use App\Models\index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inicio = index::orderBy('id', 'desc')->paginate();
        return view ('editor.inicio.index', compact('inicio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('editor.inicio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inicio = index::create($request->all());

        $inicio->imagen = $request->file('imagen')->store('img_fondos', 'public');

        $inicio->save();

        return redirect()->route('inicio.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(index $index)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $index = index::find($id);
        return view ('editor.inicio.edit', compact('index'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $clientes = index::find($id);

        $clientes->descripcion = $request->descripcion;
            // Actualizar la imagen si se proporciona una nueva
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen actual si existe
            if ($clientes->imagen) {
                Storage::delete('public/' . $clientes->imagen);
            }
            // Almacenar la nueva imagen
            $clientes->imagen = $request->file('imagen')->store('img_fondos', 'public');
        }

        $clientes->save();
        return redirect()->route('inicio.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($index)
    {
        // Encuentra el registro por su ID
        $index = Index::find($index);

        // Verifica si el registro existe y si tiene una imagen asociada
        if ($index) {
            // Obtiene la ruta de la imagen
            $imagePath = $index->imagen;

            // Elimina el registro de la base de datos
            $index->delete();

            // Elimina la imagen del almacenamiento
            if ($imagePath && Storage::exists('public/' . $imagePath)) {
                Storage::delete('public/' . $imagePath);
            }

            return redirect()->route('inicio.index')->with('success', 'Registro eliminado exitosamente.');
        }

        return redirect()->route('inicio.index')->with('error', 'Registro no encontrado.');
    }

    public function showInAnotherView()
    {
        $inicio = index::orderBy('id', 'desc')->paginate();
        return view('index', compact('inicio')); // Nueva vista 'index'
    }
    
}
