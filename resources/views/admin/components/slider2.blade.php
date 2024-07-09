<div id="slider2" style="display: none">
    <h2 class="text-center">Slider 2</h2>
    <form  enctype="multipart/form-data" method="Post" action="{{ route('slider2.update') }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="tituloSlider2" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="tituloSlider2" id="tituloSlider2" value="{{ $inicio->tituloSlider2 }}">
        </div>
        <div class="mb-3">
            <label for="textoSlider2" class="form-label">Texto</label>
            <input type="text" class="form-control" name="textoSlider2" id="textoSlider2" value="{{ $inicio->textoSlider2 }}">
        </div>
        <div class="mb-3">
            <label for="imgSlider2" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="imgSlider2" id="imgSlider2">
        </div>

        {{-- preview de icono --}}
        <div class="mb-3">
            @if ($inicio->imgSlider2)
                <img src="{{asset($inicio->imgSlider2)}}" id="img-preview2" alt="preview" style="max-width: 100px; max-height: 100px;">
            @else
                <div id="container-img2">
                    <p id ="sin-img2">Sin imagen</p>
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>