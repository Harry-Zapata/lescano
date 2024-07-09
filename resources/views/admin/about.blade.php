@extends('adminlte::page')

@section('title', 'About')

@section('content_header')
    <h1>About</h1>
    @if (session('info'))
        <div class="alert alert-success mt-4" id="alert">
            {{ session('info') }}
        </div>
    @endif
@stop

@section('content')
    <form method="POST" action="{{ route('about.update') }}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="imgNosotros" class="form-label">Imagen Nosotros</label>
            <input type="file" class="form-control" name="imgNosotros" id="imgNosotros">
        </div>
        <div class="mb-3">
            <img src="{{ asset($inicio->imgNosotros) }}" id="img-preview" alt="preview"
                style="max-width: 100px; max-height: 100px;">
        </div>
        <div class="mb-3">
            <label for="TituloNosotros" class="form-label">Título Nosotros</label>
            <input type="text" class="form-control" name="TituloNosotros" id="TituloNosotros"
                value="{{ $inicio->TituloNosotros }}">
        </div>
        <div class="mb-3">
            <label for="textoNosotros" class="form-label">Texto Nosotros</label>
            <input type="text" class="form-control" name="textoNosotros" id="textoNosotros"
                value="{{ $inicio->textoNosotros }}">
        </div>
        <div class="mb-3">
            <label for="descripcionNosotros" class="form-label">Descripción Nosotros</label>
            <textarea class="form-control" name="descripcionNosotros" id="descripcionNosotros" rows="3">{{ $inicio->descripcionNosotros }}</textarea>
        </div>
        <div class="mb-3">
            <label for="modalTituloNosotros" class="form-label">Título del Modal Nosotros</label>
            <input type="text" class="form-control" name="modalTituloNosotros" id="modalTituloNosotros"
                value="{{ $inicio->modalTituloNosotros }}">
        </div>
        <div class="mb-3">
            <label for="modalImgNosotros" class="form-label">Imagen del Modal Nosotros</label>
            <input type="file" class="form-control" name="modalImgNosotros" id="modalImgNosotros">
        </div>
        <div class="mb-3">
            <img src="{{ asset($inicio->modalImgNosotros) }}" id="modal-img-preview" alt="preview"
                style="max-width: 100px; max-height: 100px;">
        </div>
        <div class="mb-3">
            <label for="modalTextoNosotros" class="form-label">Texto del Modal Nosotros</label>
            <textarea class="form-control" name="modalTextoNosotros" id="modalTextoNosotros" rows="3">{{ $inicio->modalTextoNosotros }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')

    <script>
        setTimeout(() => {
            document.getElementById('alert').remove();
        }, 5000);
    </script>
    <script>
        const imgInput = document.getElementById('imgNosotros');
        const imgPreview = document.getElementById('img-preview');

        imgInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.addEventListener('load', function() {
                    imgPreview.src = reader.result;
                });
                reader.readAsDataURL(file);
            }
        });

        const modalImgInput = document.getElementById('modalImgNosotros');
        const modalImgPreview = document.getElementById('modal-img-preview');

        modalImgInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.addEventListener('load', function() {
                    modalImgPreview.src = reader.result;
                });
                reader.readAsDataURL(file);
            }
        });
    </script>
@stop
