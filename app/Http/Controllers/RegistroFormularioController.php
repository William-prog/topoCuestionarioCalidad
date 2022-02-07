<?php

namespace App\Http\Controllers;

use App\Models\registroFormulario;
use Illuminate\Http\Request;

class RegistroFormularioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroFormulario  $registroFormulario
     * @return \Illuminate\Http\Response
     */
    public function show(registroFormulario $registroFormulario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroFormulario  $registroFormulario
     * @return \Illuminate\Http\Response
     */
    public function edit(registroFormulario $registroFormulario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroFormulario  $registroFormulario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroFormulario $registroFormulario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroFormulario  $registroFormulario
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroFormulario $registroFormulario)
    {
        //
    }
}
