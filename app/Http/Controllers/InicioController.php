<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\galeria;
use App\Models\inicio;
use App\Models\servicios;
use App\Models\team;
use App\Models\testimonio;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = 1;
        $inicio = inicio::find($id);
        $servicios = servicios::all();
        $galeria = galeria::all();
        $team = team::all();
        $faq = faq::all();
        $testimonio = testimonio::all();
        return view('landing.index' , compact('inicio','servicios','galeria','team','faq','testimonio'));
    }

    public function panel(){
        return view('admin.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(inicio $inicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(inicio $inicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, inicio $inicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(inicio $inicio)
    {
        //
    }
}
