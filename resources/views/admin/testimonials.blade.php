@extends('adminlte::page')

@section('title', 'Testimonios')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Testimonios</h1>
        <a class="btn btn-success" href="{{ route('admin.testimonials.create') }}"><i class="fas fa-plus"></i> Crear Testimonio</a>
    </div>
    @if (session('info'))
        <div class="alert alert-success mt-4" id="alert">
            {{ session('info') }}
        </div>
    @endif
@stop

@section('content')
    <div class="container d-flex flex-wrap justify-content-center" style="gap: 30px">
        @foreach ($testimonio as $testimonio)
            <div class="card text-center d-flex flex-column align-items-center" style="width: 300px">
                <div class="card-header" style="height: 200px;width: 200px; padding: 15px 0 0 0">
                    <img src="{{ asset($testimonio->imagen) }}" alt="{{ $testimonio->imagen }}" style="width: 200px; height: 200px">    
                </div>
                <div class="card-body">
                    <p class="text-justify" style="overfow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical">{{$testimonio->texto}}</p>
                    <h6 class="pt-2 text-capitalize text-bold pt-4">{{$testimonio->nombre}}</h6>
                    <span>{{$testimonio->cargo}}</span>
                </div>
                <div class="card-footer d-flex justify-content-end w-100">
                    <a class="btn btn-primary" href="{{ route('admin.testimonials.edit', $testimonio->id) }}"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.testimonials.destroy', $testimonio->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
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
@stop