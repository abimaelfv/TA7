<?php

namespace App\Http\Controllers\Fallecidos;

use App\Models\Fallecido;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FallecidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * return \Illuminate\Http\Response
     */
    public function index()
    {
        $fallecidos = Fallecido::get();
        return view('fallecidos.index',compact('fallecidos'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fallecidos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * param  \Illuminate\Http\Request  $request
     * return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Fallecido::create($request->all());
        return redirect()->route('fallecidos.index');
    }

    /**
     * Display the specified resource.
     *
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $fallecido = Fallecido::find($id);
        return view('fallecidos.edit', compact('fallecido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * param  \Illuminate\Http\Request  $request
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    public function update(Request $request, Fallecido $fallecido)
    {
        $fallecido->update($request->all());
        return redirect()->route('fallecidos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * param  int  $id
     * return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fallecido = Fallecido::findOrFail($id);
        $fallecido->delete();
        return redirect()->route('fallecidos.index');
    }
}
