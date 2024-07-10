<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use App\Models\inicio;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = 1;
        $inicio = inicio::find($id);
        $contacto = contacto::all();
        return view('admin.contact', compact('inicio', 'contacto'));
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
        $services = new contacto();
        $data = [
            'nombre' => $request->input('nombre'),
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'asunto' => $request->input('asunto'),
            'mensaje' => $request->input('mensaje'),
        ];

        $services->create($data);
        
        return redirect()->route('inicio#contacto')->with('info', 'Se agrego correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contacto $contacto)
    {
        //
    }
}
