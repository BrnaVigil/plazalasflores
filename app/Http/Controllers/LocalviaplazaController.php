<?php

namespace App\Http\Controllers;

use App\Models\localviaplaza;
use Illuminate\Http\Request;

class LocalviaplazaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locales = localviaplaza::orderBy('id', 'desc')->get();
        return view ('viaplaza.local_vps.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('viaplaza.local_vps.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $local_vp = localviaplaza::create($request->all());
        return redirect()->route('local_vps.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(localviaplaza $localviaplaza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($local_vp)
    {
        $local_vp = localviaplaza::find($local_vp);
        return view ('viaplaza.local_vps.edit', compact('local_vp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, localviaplaza $local_vp)
    {
        $local_vp->update($request->all());
        return redirect()->route('local_vps.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(localviaplaza $local_vp)
    {
        $local_vp->delete();
        return redirect()->route('local_vps.index');
    }
}
