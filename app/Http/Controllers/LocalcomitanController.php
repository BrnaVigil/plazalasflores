<?php

namespace App\Http\Controllers;

use App\Models\localcomitan;
use Illuminate\Http\Request;

class LocalcomitanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locales = localcomitan::orderBy('id', 'desc')->get();
        return view ('comitan.local.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('comitan.local.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $local = localcomitan::create($request->all());
        return redirect()->route('local.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(localcomitan $localcomitan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($local)
    {
        $local = localcomitan::find($local);
        return view ('comitan.local.edit', compact('local'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, localcomitan $local)
    {
        $local->update($request->all());
        return redirect()->route('local.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(localcomitan $local)
    {
        $local->delete();
        return redirect()->route('local.index');
    }
}
