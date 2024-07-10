<div id="faq2" class="container">
    <form enctype="multipart/form-data" method="Post" action="{{ route('admin.faq.update',['id'=>$faq[1]->id]) }}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="pregunta" class="form-label">Pregunta</label>
            <input type="text" class="form-control" name="pregunta" id="pregunta" value="{{$faq[1]->pregunta}}">
        </div>
        <div class="mb-3">
            <label for="respuesta1" class="form-label">Respuesta 1</label>
            <input type="text" class="form-control" name="respuesta1" id="respuesta1" value="{{$faq[1]->respuesta1}}">
        </div>
        <div class="mb-3">
            <label for="respuesta2" class="form-label">Respuesta 2</label>
            <input type="text" class="form-control" name="respuesta2" id="respuesta2" value="{{$faq[1]->respuesta2}}">
        </div>
        <div class="mb-3">
            <label for="respuesta3" class="form-label">Respuesta 3</label>
            <input type="text" class="form-control" name="respuesta3" id="respuesta3" value="{{$faq[1]->respuesta3}}">
        </div>
        <div class="mb-3">
            <label for="respuesta4" class="form-label">Respuesta 4</label>
            <input type="text" class="form-control" name="respuesta4" id="respuesta4" value="{{$faq[1]->respuesta4}}">
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary mr-2"><i class="fas fa-save mr-2"></i>Editar</button>
        </div>
    </form>
</div>