@extends('adminlte::page')

@section('title', 'Teams')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Teams</h1>
        <a class="btn btn-success" href="{{ route('admin.teams.create') }}"><i class="fas fa-plus"></i> Crear Equipo</a>
    </div>
    @if (session('info'))
        <div class="alert alert-success mt-4" id="alert">
            {{ session('info') }}
        </div>
    @endif
@stop

@section('content')
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach ($team as $equipo)
            <div class="card m-3 col-3">
                <div class="card-header" style="height: 200px">
                    <img class="card-img-top" style="width: 100%; height: 200px" src="{{ asset($equipo->imagen) }}" alt="img">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $equipo->nombre }}</h5>
                    <p class="card-text">{{ $equipo->puesto }}</p>
                    <p class="card-text">{{ $equipo->texto }}</p>
                    <div class="text-center mb-2">
                        <a class="btn btn-primary" href="{{ $equipo->twitter }}" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary" href="{{ $equipo->facebook }}" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary" href="{{ $equipo->instagram }}" target="_blank"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('admin.teams.edit', $equipo->id) }}" class="btn btn-primary mr-2"><i
                            class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.teams.destroy', $equipo->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </div>

            </div>

            {{-- <div class="card m-3">

                <div class="item m-3 d-flex justify-content-end">
                    <a href="{{ route('admin.teams.edit', $equipo->id) }}" class="btn btn-primary mr-2"><i
                            class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.teams.destroy', $equipo->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </div>
            </div> --}}
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
