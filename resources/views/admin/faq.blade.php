@extends('adminlte::page')

@section('title', 'FAQ')

@section('content_header')
    <h1>FAQ</h1>
    @if (session('info'))
        <div class="alert alert-success mt-4" id="alert">
            {{ session('info') }}
        </div>
    @endif
@stop

@section('content')
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary" id="btn1">Pregunta 1</button>
        <button type="button" class="btn btn-success" id="btn2">Pregunta 2</button>
    </div>

    <div class="content" id="main"></div>

    @include('admin.components.faq1')
    @include('admin.components.faq2')
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function showSlider(sliderId) {
                let main = document.getElementById('main');
                let slider = document.getElementById(sliderId);

                // Reset the main content and hide all sliders
                reset();

                // Clone the slider, display it and append it to the main content
                let clone = slider.cloneNode(true);
                clone.style.display = "block";
                main.appendChild(clone);

                // Add event listeners for image preview
                addImagePreviewListeners(sliderId);
            }

            function reset() {
                let main = document.getElementById('main');
                let faq1 = document.getElementById('faq1');
                let faq2 = document.getElementById('faq2');
                faq1.style.display = "none";
                faq2.style.display = "none";
                main.innerHTML = ""; // Clear the main content
            }

            document.getElementById('btn1').addEventListener('click', function() {
                showSlider('faq1');
            });

            document.getElementById('btn2').addEventListener('click', function() {
                showSlider('faq2');
            });

            showSlider('faq1'); // Show faq1 by default
        });

        // Si existe alert info se elimine en 5 segundos
        setTimeout(() => {
            let alertElement = document.getElementById('alert');
            if (alertElement) {
                alertElement.remove();
            }
        }, 5000);
    </script>
@stop
