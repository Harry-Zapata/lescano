@extends('adminlte::page')

@section('title', 'Contact')

@section('content_header')
    <h1>Contact</h1>
@stop

@section('content')
    <table class="table table-striped">
        {{-- Nombre email asunto telefono mensaje --}}
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Nombre</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Teléfono</th>
                <th scope="col" class="text-center">Asunto</th>
                <th scope="col" class="text-center">Mensaje</th>
                <th scope="col" class="text-center">Fecha de envio</th>
                <th scope="col" class="text-center">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacto as $contacto)
                <tr>
                    <th scope="row" class="text-center align-middle">{{ $contacto->id }}</th>
                    <td class="text-center align-middle">{{ $contacto->nombre }}</td>
                    <td class="text-center align-middle">{{ $contacto->email }}</td>
                    <td class="text-center align-middle">{{ $contacto->telefono }}</td>
                    <td class="text-center align-middle">{{ $contacto->asunto }}</td>
                    <td class="text-center align-middle">{{ $contacto->mensaje }}</td>
                    <td class="text-center align-middle">
                        {{ \Carbon\Carbon::parse($contacto->created_at)->setTimezone('America/Lima')->translatedFormat('j \d\e F \d\e\l Y') }}<br>
                        {{ \Carbon\Carbon::parse($contacto->created_at)->setTimezone('America/Lima')->translatedFormat('\a \l\a\s H:i \h\o\r\a\s') }}
                    </td>
                    <td class="text-center align-middle">
                        <a href="" class="btn btn-primary"><i class="fas fa-eye mr-2"></i>Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
