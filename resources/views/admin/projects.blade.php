@extends('adminlte::page')

@section('title', 'Projects')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Projects</h1>
        <a class="btn btn-success" href="{{ route('admin.projects.create') }}"><i class="fas fa-plus"></i> Crear Proyecto</a>
    </div>
    @if (session('info'))
        <div class="alert alert-success mt-4" id="alert">
            {{ session('info') }}
        </div>
    @endif
@stop

@section('content')
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach ($galeria as $imagen)
            <div class="card m-3">
                <div class="item m-2">
                    <img src="{{ asset($imagen->imagen) }}" style="width: 200px; height: 200px" alt="{{ $imagen->imagen }}">
                </div>
                <div class="item m-3 d-flex justify-content-end">
                    <a href="{{ route('admin.projects.edit', $imagen->id) }}" class="btn btn-primary mr-2"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.projects.destroy', $imagen->id) }}" method="post">
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
