@extends('adminlte::page')

@section('title', 'team')

@section('content_header')
    <h1>Editar miembros de equipo</h1>
@stop

@section('content')
    <form method="POST" class="form" action="{{ route('admin.teams.update', ['id' => $equipo->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nombre" class="form-label">nombre</label>
            <input type="text" class="form-control" value="{{ $equipo->nombre }}" name="nombre" id="nombre">
        </div>
        <div class="mb-3">
            <label for="puesto" class="form-label">puesto</label>
            <input type="text" class="form-control" name="puesto" id="puesto" value="{{ $equipo->puesto }}">
        </div>
        <div class="mb-3">
            <label for="texto" class="form-label">texto</label>
            <input type="text" class="form-control" name="texto" id="texto" value="{{ $equipo->texto }}">
        </div>
        <div class="mb-3">
            <label for="twitter" class="form-label">twitter</label>
            <input type="text" class="form-control" name="twitter" id="twitter" value="{{ $equipo->twitter }}">
        </div>
        <div class="mb-3">
            <label for="facebook" class="form-label">facebook</label>
            <input type="text" class="form-control" name="facebook" id="facebook" value="{{ $equipo->facebook }}">
        </div>
        <div class="mb-3">
            <label for="instagram" class="form-label">instagram</label>
            <input type="text" class="form-control" name="instagram" id="instagram" value="{{ $equipo->instagram }}">
        </div>

        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="imagen" id="imagen">
        </div>
        <div class="mb-3">
            <img src="{{ asset($equipo->imagen) }}" style="max-width: 200px; max-height: 200px" id="imagen-preview" alt="Sin imagen">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-save mr-2"></i>Crear</button>
            <a href="{{ route('admin.teams') }}" class="btn btn-danger"><i class="fas fa-ban mr-2"></i>Cancelar</a>
        </div>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        function previewImage() {
            let imgInput = document.getElementById('imagen');
            let imgPreview = document.getElementById('imagen-preview');
            let oFReader = new FileReader();
            oFReader.readAsDataURL(imgInput.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        const imgInput = document.getElementById('imagen');
        const imgModalInput = document.getElementById('imagen');

        imgInput.addEventListener('change', function() {
            previewImage();
        })
    </script>
@stop
