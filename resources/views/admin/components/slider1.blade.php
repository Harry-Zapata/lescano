<div id="slider1" style="display: none">
    <h2 class="text-center">Slider 1</h2>
    <form  enctype="multipart/form-data" method="Post" action="{{ route('slider1.update') }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="tituloSlider1" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="tituloSlider1" id="tituloSlider1" value="{{ $inicio->tituloSlider1 }}">
        </div>
        <div class="mb-3">
            <label for="textoSlider1" class="form-label">Texto</label>
            <input type="text" class="form-control" name="textoSlider1" id="textoSlider1" value="{{ $inicio->textoSlider1 }}">
        </div>
        <div class="mb-3">
            <label for="imgSlider1" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="imgSlider1" id="imgSlider1">
        </div>

        {{-- preview de icono --}}
        <div class="mb-3">
            @if ($inicio->imgSlider1)
                <img src="{{asset($inicio->imgSlider1)}}" id="img-preview1" alt="preview" style="max-width: 100px; max-height: 100px;">
            @else
                <div id="container-img1">
                    <p id ="sin-img1">Sin imagen</p>
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>