<?php

namespace App\Http\Controllers;

use App\Models\servicios;
use Illuminate\Http\Request;
use App\Models\inicio;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = 1;
        $inicio = inicio::find($id);
        $servicios = servicios::all();
        return view('admin.services', compact('inicio', 'servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.serviceCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $services = new servicios();
        $data = [
            'nombre' => $request->input('nombre'),
            'imagen' => $request->input('imagen'),
            'nombreModal' => $request->input('nombreModal'),
            'imagenModal' => $request->input('imagenModal'),
            'textoModal' => $request->input('textoModal'),
        ];

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imagen'] = 'assets/img/' . $filename;
        }
        if ($request->hasFile('imagenModal')) {
            $file = $request->file('imagenModal');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imagenModal'] = 'assets/img/' . $filename;
        }

        $services->create($data);

        return redirect()->route('admin.services')->with('info', 'Se agrego correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(servicios $servicios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $servicios = servicios::findOrFail($id);
        return view('admin.serviceEdit', compact('servicios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, servicios $servicios)
    {
        $servicios = servicios::find($request->id);
        $data = [
            'nombre' => $request->input('nombre'),
            'imagen' => $request->input('imagen'),
            'nombreModal' => $request->input('nombreModal'),
            'imagenModal' => $request->input('imagenModal'),
            'textoModal' => $request->input('textoModal'),
        ];


        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imagen'] = 'assets/img/' . $filename;
        } else {
            $data['imagen'] = $servicios->imagen;
        }
        if ($request->hasFile('imagenModal')) {
            $file = $request->file('imagenModal');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imagenModal'] = 'assets/img/' . $filename;
        } else {
            $data['imagenModal'] = $servicios->imagenModal;
        }

        $servicios->update($data);

        return redirect()->route('admin.services')->with('info', 'Se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //Eliminar servicio por id
        servicios::where('id', $id)->delete();
        return redirect()->route('admin.services')->with('info', 'Se elimino correctamente');
    }
}
