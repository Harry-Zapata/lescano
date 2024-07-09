@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Metadata</h1>
    @if (session('info'))
        <div class="alert alert-success mt-4" id="alert">
            {{ session('info') }}
        </div>
    @endif
@stop

@section('content')
    <form method="Post" action="{{ route('metadata.update') }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="navbar" class="form-label">Mostrar Navbar Al Iniciar</label>
            <select class="form-select form-select-lg" name="navbar" id="navbar">
                <option value="true" {{ $inicio->navbar == 'true' ? 'selected' : '' }}>Si</option>
                <option value="false" {{ $inicio->navbar == 'false' ? 'selected' : '' }}>No</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $inicio->titulo }}">
        </div>
        <div class="mb-3">
            <label for="Textologo" class="form-label">Textologo</label>
            <input type="text" class="form-control" name="Textologo" id="Textologo" value="{{ $inicio->Textologo }}">
        </div>
        <div class="mb-3">
            <label for="keywords" class="form-label">keywords</label>
            <input type="text" class="form-control" name="keywords" id="keywords" value="{{ $inicio->keywords }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" name="description" id="description"
                value="{{ $inicio->description }}">
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="file" class="form-control" name="icon" id="icon" placeholder="Actualizar imagen">
        </div>

        {{-- preview de icono --}}
        <div class="mb-3">
            @if ($inicio->icon)
                <img src="{{ asset($inicio->icon) }}" id="img-preview" alt="preview"
                    style="max-width: 100px; max-height: 100px;">
            @else
                <div id="container-img">
                    <p id ="sin-img">Sin imagen</p>
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@stop

@section('css')
    <style>
        /* The switch - the box around the slider */
        .switch {
            font-size: 17px;
            position: relative;
            display: inline-block;
            width: 3.5em;
            height: 2em;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #fff;
            border: 1px solid #adb5bd;
            transition: .4s;
            border-radius: 30px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 1.4em;
            width: 1.4em;
            border-radius: 20px;
            left: 0.27em;
            bottom: 0.25em;
            background-color: #adb5bd;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #007bff;
            border: 1px solid #007bff;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #007bff;
        }

        input:checked+.slider:before {
            transform: translateX(1.4em);
            background-color: #fff;
        }
    </style>
@stop

@section('js')
    <script>
        // Si existe alet info se elimine en 5 segundos
        setTimeout(() => {
            document.getElementById('alert').remove();
        }, 5000);


        function previewEdit() {
            const image = document.querySelector('#icon');
            const imgPreview = document.querySelector('#img-preview');
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewCreate() {
            let div = document.querySelector('#container-img');
            let p = document.querySelector('#sin-img');
            div.removeChild(p);
            let img = document.createElement('img');
            img.setAttribute('id', 'img-preview');
            img.setAttribute('alt', 'Imagen actual');
            img.setAttribute('style', 'max-width: 100px; max-height: 100px;');
            img.setAttribute('src', URL.createObjectURL(event.target.files[0]));
            div.appendChild(img);
        }
        //obtener todo lo almacenado en $gasto
        const inicio = {!! json_encode($inicio) !!};
        if (inicio.icon) {
            document.querySelector('#icon').addEventListener('change', previewEdit);
        } else {
            document.querySelector('#icon').addEventListener('change', previewCreate);
        }
    </script>
@stop
