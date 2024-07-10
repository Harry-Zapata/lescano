@extends('adminlte::page')

@section('title', 'Testimonios')

@section('content_header')
    <h1>Crear Testimonio</h1>
@stop

@section('content')
    <form action="{{ route('admin.testimonials.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
        </div>
        <div class="mb-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" class="form-control" name="cargo" id="cargo">
        </div>
        <div class="mb-3">
            <label for="texto" class="form-label">Texto</label>
            <textarea class="form-control" name="texto" id="texto" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="imagen" id="imagen">
        </div>
        <div class="mb-3">
            <img src="" style="max-width: 200px; max-height: 200px" id="imagen-preview" alt="Sin imagen">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-save mr-2"></i>Crear</button>
            <a href="{{ route('admin.testimonials') }}" class="btn btn-danger"><i class="fas fa-ban mr-2"></i>Cancelar</a>
        </div>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        // Preview image
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
