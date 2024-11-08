<?php

namespace App\Http\Controllers;

use App\Models\localvillaflores;
use Illuminate\Http\Request;

class LocalvillafloresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locales = localvillaflores::orderBy('id', 'desc')->get();
        return view ('villaflores.local_vfs.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('villaflores.local_vfs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $local = localvillaflores::create($request->all());
        return redirect()->route('local_vfs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(localvillaflores $localvillaflores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($local_vf)
    {
        $local_vf = localvillaflores::find($local_vf);
        return view ('villaflores.local_vfs.edit', compact('local_vf'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, localvillaflores $local_vf)
    {
        $local_vf->update($request->all());
        return redirect()->route('local_vfs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(localvillaflores $local_vf)
    {
        $local_vf->delete();
        return redirect()->route('local_vfs.index');
    }
}
