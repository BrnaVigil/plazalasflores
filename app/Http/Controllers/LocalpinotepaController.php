<?php

namespace App\Http\Controllers;

use App\Models\localpinotepa;
use Illuminate\Http\Request;

class LocalpinotepaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locales = localpinotepa::orderBy('id', 'desc')->get();
        return view ('pinotepa.local_pnts.index', compact('locales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pinotepa.local_pnts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $local_pnt = localpinotepa::create($request->all());
        return redirect()->route('local_pnts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(localpinotepa $localpinotepa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($local_pnt)
    {
        $local_pnt = localpinotepa::find($local_pnt);
        return view ('pinotepa.local_pnts.edit', compact('local_pnt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, localpinotepa $local_pnt)
    {
        $local_pnt->update($request->all());
        return redirect()->route('local_pnts.index');        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(localpinotepa $local_pnt)
    {
        $local_pnt->delete();
        return redirect()->route('local_pnts.index');
    }
}
