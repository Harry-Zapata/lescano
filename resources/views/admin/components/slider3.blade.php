<div id="slider3" style="display: none">
    <h2 class="text-center">Slider 3</h2>
    <form  enctype="multipart/form-data" method="Post" action="{{ route('slider3.update') }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="tituloSlider3" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="tituloSlider3" id="tituloSlider3" value="{{ $inicio->tituloSlider3 }}">
        </div>
        <div class="mb-3">
            <label for="textoSlider3" class="form-label">Texto</label>
            <input type="text" class="form-control" name="textoSlider3" id="textoSlider3" value="{{ $inicio->textoSlider3 }}">
        </div>
        <div class="mb-3">
            <label for="imgSlider3" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="imgSlider3" id="imgSlider3">
        </div>

        {{-- preview de icono --}}
        <div class="mb-3">
            @if ($inicio->imgSlider3)
                <img src="{{asset($inicio->imgSlider3)}}" id="img-preview3" alt="preview" style="max-width: 100px; max-height: 100px;">
            @else
                <div id="container-img3">
                    <p id ="sin-img3">Sin imagen</p>
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>