<?php

namespace App\Http\Controllers;

use App\Models\inicio;
use App\Models\servicios;
use Illuminate\Http\Request;

class metadataController extends Controller
{
    public function index()
    {
        $id = 1;
        $inicio = inicio::find($id);
        return view('admin.metadata', compact('inicio'));
    }
    public function hero()
    {
        $id = 1;
        $inicio = inicio::find($id);
        return view('admin.hero', compact('inicio'));
    }
    public function update(Request $request, inicio $inicio)
    {
        $inicio = inicio::find(1);
        $data = [
            'titulo' => $request->input('titulo'),
            'keywords' => $request->input('keywords'),
            'description' => $request->input('description'),
            'Textologo' => $request->input('Textologo'),
            'navbar' => $request->input('navbar'),
        ];
        // Guardar icono
        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['icon'] = 'assets/img/' . $filename;
        }else{
            $data['icon'] = $inicio->icon;
        }

        $inicio->update($data);

        return redirect()->route('metadata')->with('info', 'Se actualizo correctamente');
    }

    public function slider1(Request $request, inicio $inicio)
    {
        $inicio = inicio::find(1);
        $data = [
            'tituloSlider1' => $request->input('tituloSlider1'),
            'textoSlider1' => $request->input('textoSlider1'),
        ];
        if ($request->hasFile('imgSlider1')) {
            $file = $request->file('imgSlider1');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imgSlider1'] = 'assets/img/' . $filename;
        }else{
            $data['imgSlider1'] = $inicio->imgSlider1;
        }
        $inicio->update($data);
        return redirect()->route('admin.hero')->with('info', 'Se actualizo correctamente');
    }
    public function slider2(Request $request, inicio $inicio)
    {
        $inicio = inicio::find(1);
        $data = [
            'tituloSlider2' => $request->input('tituloSlider2'),
            'textoSlider2' => $request->input('textoSlider2'),
        ];
        if ($request->hasFile('imgSlider2')) {
            $file = $request->file('imgSlider2');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imgSlider2'] = 'assets/img/' . $filename;
        }else{
            $data['imgSlider2'] = $inicio->imgSlider2;
        }
        $inicio->update($data);
        return redirect()->route('admin.hero')->with('info', 'Se actualizo correctamente');
    }
    public function slider3(Request $request, inicio $inicio)
    {
        $inicio = inicio::find(1);
        $data = [
            'tituloSlider3' => $request->input('tituloSlider3'),
            'textoSlider3' => $request->input('textoSlider3'),
        ];
        if ($request->hasFile('imgSlider3')) {
            $file = $request->file('imgSlider3');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imgSlider3'] = 'assets/img/' . $filename;
        }else{
            $data['imgSlider3'] = $inicio->imgSlider3;
        }
        $inicio->update($data);
        return redirect()->route('admin.hero')->with('info', 'Se actualizo correctamente');
    }
    public function about()
    {
        $id = 1;
        $inicio = inicio::find($id);
        return view('admin.about', compact('inicio'));
    }
    public function updateAbout(Request $request, inicio $inicio)
    {
        $inicio = inicio::find(1);
        $data = [
            'TituloNosotros' => $request->input('TituloNosotros'),
            'textoNosotros' => $request->input('textoNosotros'),
            'descripcionNosotros' => $request->input('descripcionNosotros'),
            'modalTituloNosotros' => $request->input('modalTituloNosotros'),
            'modalTextoNosotros' => $request->input('modalTextoNosotros'),
        ];

        if ($request->hasFile('imgNosotros')) {
            $file = $request->file('imgNosotros');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['imgNosotros'] = 'assets/img/' . $filename;
        }else{
            $data['imgNosotros'] = $inicio->imgNosotros;
        }
        if ($request->hasFile('modalImgNosotros')) {
            $file = $request->file('modalImgNosotros');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('assets/img', $filename);
            $data['modalImgNosotros'] = 'assets/img/' . $filename;
        }else{
            $data['modalImgNosotros'] = $inicio->modalImgNosotros;
        }

        $inicio->update($data);

        return redirect()->route('admin.about')->with('info', 'Se actualizo correctamente');
    }


    public function teams()
    {
        $id = 1;
        $inicio = inicio::find($id);
        return view('admin.teams', compact('inicio'));
    }
    public function faq()
    {
        $id = 1;
        $inicio = inicio::find($id);
        return view('admin.faq', compact('inicio'));
    }
    public function testimonials()
    {
        $id = 1;
        $inicio = inicio::find($id);
        return view('admin.testimonials', compact('inicio'));
    }
    public function contact()
    {
        $id = 1;
        $inicio = inicio::find($id);
        return view('admin.contact', compact('inicio'));
    }
    public function footer()
    {
        $id = 1;
        $inicio = inicio::find($id);
        return view('admin.footer', compact('inicio'));
    }
}
