<?php

namespace App\Http\Controllers;

use App\Models\localpalenque;
use Illuminate\Http\Request;

class LocalpalenqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locales = localpalenque::orderBy('id', 'desc')->get();
        return view ('palenque.local_plqs.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('palenque.local_plqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $local_plq = localpalenque::create($request->all());
        return redirect()->route('local_plqs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($localpalenque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($local_plq)
    {
        $local_vp = localpalenque::find($local_plq);
        return view ('viaplaza.local_vps.edit', compact('local_vp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, localpalenque $local_plq)
    {
        $local_plq->update($request->all());
        return redirect()->route('local_plqs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(localpalenque $local_plq)
    {
        $local_plq->delete();
        return redirect()->route('local_plqs.index');
    }
}
