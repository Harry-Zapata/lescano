@extends('adminlte::page')

@section('title', 'Services')

@section('content_header')
    <div class="d-flex justify-content-between">
        <h1>Services</h1>
        <a class="btn btn-success" href="{{ route('admin.services.create') }}"><i class="fas fa-plus"></i> Crear Servicio</a>
    </div>
    @if (session('info'))
        <div class="alert alert-success mt-4" id="alert">
            {{ session('info') }}
        </div>
    @endif
@stop

@section('content')
    <div class="container table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nombre</th>
                    <th scope="col">imagen</th>
                    <th scope="col">nombreModal</th>
                    <th scope="col">imagenModal</th>
                    <th scope="col">textoModal</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicios as $servicio)
                    <tr>
                        <td>{{ $servicio->id }}</td>
                        <td>{{ $servicio->nombre }}</td>
                        <td>{{ $servicio->imagen }}</td>
                        <td>{{ $servicio->nombreModal }}</td>
                        <td>{{ $servicio->imagenModal }}</td>
                        <td style="max-width: 200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap">
                            {{ $servicio->textoModal }}ctfybhjnuctudxrytf hjlkñlktdrysexfgjhjl
                            kjgvycxrydcgbhjnbgtdcryycgbhjnugtfr</td>
                        <td class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('admin.services.edit', $servicio) }}" class="btn btn-primary"><i
                                    class="fas fa-edit"></i></a>
                            {{-- <a href="{{ route('admin.services.destroy', $servicio) }}" class="btn btn-danger">Eliminar</a> --}}
                            <form action="{{ route('admin.services.destroy', $servicio->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
