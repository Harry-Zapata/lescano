<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\inicio;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = 1;
        $inicio = inicio::find($id);
        $team = team::all();
        return view('admin.teams', compact('inicio', 'team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teamsCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $services = new team();
        $data = [
            'nombre' => $request->input('nombre'),
            'puesto' => $request->input('puesto'),
            'texto' => $request->input('texto'),
            'twitter' => $request->input('twitter'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
        ];

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imagen'] = 'assets/img/' . $filename;
        }
        $services->create($data);

        return redirect()->route('admin.teams')->with('info', 'Se agrego correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $equipo = team::find($id);
        return view('admin.teamsEdit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, team $team)
    {
        $team = team::find($request->id);
        $data = [
            'nombre' => $request->input('nombre'),
            'puesto' => $request->input('puesto'),
            'texto' => $request->input('texto'),
            'twitter' => $request->input('twitter'),
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'imagen' => $request->input('imagen'),
        ];
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imagen'] = 'assets/img/' . $filename;
        } else {
            $data['imagen'] = $team->imagen;
        }
        $team->update($data);
        return redirect()->route('admin.teams')->with('info', 'Se actualizo correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        team::where('id', $id)->delete();
        return redirect()->route('admin.teams')->with('info', 'Se elimino correctamente');
    }
}
