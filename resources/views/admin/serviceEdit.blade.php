@extends('adminlte::page')

@section('title', 'Services')

@section('content_header')
    <h1>Services Edit</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('admin.services.update', ['id' => $servicios->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Servicio</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $servicios->nombre }}">
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen del Servicio</label>
            <input type="file" class="form-control" name="imagen" id="imagen">
        </div>
        <div class="mb-3">
            <img src="{{ asset($servicios->imagen) }}" style="max-width: 200px; max-height: 200px" id="imagen-preview"
                alt="Sin imagen">
        </div>
        <div class="mb-3">
            <label for="nombreModal" class="form-label">Nombre del Modal Servicio</label>
            <input type="text" class="form-control" name="nombreModal" id="nombreModal" value="{{ $servicios->nombreModal }}">
        </div>
        <div class="mb-3">
            <label for="imagenModal" class="form-label">Imagen del Modal Servicio</label>
            <input type="file" class="form-control" name="imagenModal" id="imagenModal">
        </div>
        <div class="mb-3">
            <img src="{{ asset($servicios->imagenModal) }}" style="max-width: 200px; max-height: 200px" id="imagen-preview-modal" alt="Sin imagen">
        </div>
        <div class="mb-3">
            <label for="textoModal" class="form-label">Texto del Modal</label>
            <textarea class="form-control" name="textoModal" id="textoModal" rows="3">{{ $servicios->textoModal }}</textarea>
        </div>

        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-save mr-2"></i>Editar</button>
            <a href="{{ route('admin.services') }}" class="btn btn-danger"><i class="fas fa-ban mr-2"></i>Cancelar</a>
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

        function previewImageModal() {
            let imgInput = document.getElementById('imagenModal');
            let imgPreview = document.getElementById('imagen-preview-modal');
            let oFReader = new FileReader();
            oFReader.readAsDataURL(imgInput.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        const imgInput = document.getElementById('imagen');
        const imgModalInput = document.getElementById('imagenModal');

        imgInput.addEventListener('change', function() {
            previewImage();
        })
        imgModalInput.addEventListener('change', function() {
            previewImageModal();
        })
    </script>
@stop
