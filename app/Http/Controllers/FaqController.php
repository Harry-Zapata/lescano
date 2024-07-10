<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\inicio;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = 1;
        $inicio = inicio::find($id);
        $faq = faq::all();
        return view('admin.faq', compact('inicio', 'faq'));
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
    public function show(faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(faq $faq)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, faq $faq)
    {
        $faq = faq::find($request->id);
        $data = [
            'pregunta' => $request->input('pregunta'),
            'respuesta1' => $request->input('respuesta1'),
            'respuesta2' => $request->input('respuesta2'),
            'respuesta3' => $request->input('respuesta3'),
            'respuesta4' => $request->input('respuesta4'),
        ];
        $faq->update($data);
        return redirect()->route('admin.faq')->with('info', 'Se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(faq $faq)
    {
        //
    }
}
