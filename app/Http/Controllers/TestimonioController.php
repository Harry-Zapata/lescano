<?php

namespace App\Http\Controllers;

use App\Models\inicio;
use App\Models\testimonio;
use Illuminate\Http\Request;

class TestimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = 1;
        $inicio = inicio::find($id);
        $testimonio = testimonio::all();
        return view('admin.testimonials', compact('inicio', 'testimonio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonialsCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $services = new testimonio();
        $data = [
            'nombre' => $request->input('nombre'),
            'cargo' => $request->input('cargo'),
            'texto' => $request->input('texto'),
        ];

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imagen'] = 'assets/img/' . $filename;
        }

        $services->create($data);

        return redirect()->route('admin.testimonials')->with('info', 'Se agrego correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(testimonio $testimonio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $testimonio = testimonio::find($id);
        return view('admin.testimonialsEdit', compact('testimonio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testimonio $testimonio)
    {
        $testimonio = testimonio::find($request->id);
        $data = [
            'nombre' => $request->input('nombre'),
            'cargo' => $request->input('cargo'),
            'texto' => $request->input('texto'),
            'imagen' => $request->input('imagen'),
        ];
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imagen'] = 'assets/img/' . $filename;
        }else{
            $data['imagen'] = $testimonio->imagen;
        }
        $testimonio->update($data);
        return redirect()->route('admin.testimonials')->with('info', 'Se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        testimonio::where('id', $id)->delete();
        return redirect()->route('admin.testimonials')->with('info', 'Se elimino correctamente');
    }
}
