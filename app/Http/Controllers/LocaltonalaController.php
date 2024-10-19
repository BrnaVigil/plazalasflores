<?php

namespace App\Http\Controllers;

use App\Models\localtonala;
use Illuminate\Http\Request;

class LocaltonalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locales = localtonala::orderBy('id', 'desc')->paginate();
        return view ('tonala.local_tonala.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tonala.local_tonala.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $local = localtonala::create($request->all());
        return redirect()->route('local_tonala.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(localtonala $localtonala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($local_tonala)
    {
        $local_tonala = localtonala::find($local_tonala);
        return view ('tonala.local_tonala.edit', compact('local_tonala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, localtonala $local_tonala)
    {
        $local_tonala->update($request->all());
        return redirect()->route('local_tonala.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(localtonala $local_tonala)
    {
        $local_tonala->delete();
        return redirect()->route('local_tonala.index');
    }
}
