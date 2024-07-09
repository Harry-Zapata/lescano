<?php

namespace App\Http\Controllers;

use App\Models\galeria;
use App\Models\inicio;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = 1;
        $inicio = inicio::find($id);
        $galeria = galeria::all();
        return view('admin.projects', compact('inicio', 'galeria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projectsCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $services = new galeria();
        $data = [];

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imagen'] = 'assets/img/' . $filename;
        }
        $services->create($data);

        return redirect()->route('admin.projects')->with('info', 'Se agrego correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(galeria $galeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeria = galeria::find($id);
        return view('admin.projectsEdit', compact('galeria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, galeria $galeria)
    {
        $galeria = galeria::find($request->id);
        $data = [
            'imagen' => $request->input('imagen'),
        ];
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imagen'] = 'assets/img/' . $filename;
        }else{
            $data['imagen'] = $galeria->imagen;
        }
        $galeria->update($data);
        return redirect()->route('admin.projects')->with('info', 'Se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        galeria::where('id', $id)->delete();
        return redirect()->route('admin.projects')->with('info', 'Se elimino correctamente');
    }
}
