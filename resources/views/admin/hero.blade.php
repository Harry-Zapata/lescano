@extends('adminlte::page')

@section('title', 'Hero Section Update')

@section('content_header')
    <h1>Hero Section Update</h1>
    @if (session('info'))
        <div class="alert alert-success mt-4" id="alert">
            {{ session('info') }}
        </div>
    @endif
@stop

@section('content')
    <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-primary" id="btn1">Slider 1</button>
        <button type="button" class="btn btn-success" id="btn2">Slider 2</button>
        <button type="button" class="btn btn-danger" id="btn3">Slider 3</button>
    </div>

    <div class="content" id="main"></div>

    {{-- Slider 1 --}}
    @include('admin.components.slider1')
    {{-- Slider 2 --}}
    @include('admin.components.slider2')
    {{-- Slider 3 --}}
    @include('admin.components.slider3')
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
                main.innerHTML = ""; // Clear the main content
            }

            function addImagePreviewListeners(sliderId) {
                if (sliderId === 'slider1') {
                    const imgSlider1 = document.querySelector('#main #imgSlider1');
                    const inicio = {!! json_encode($inicio) !!};
                    if (inicio.imgSlider1) {
                        imgSlider1.addEventListener('change', (e) => previewEdit(e, '#img-preview1'));
                    } else {
                        imgSlider1.addEventListener('change', (e) => previewCreate(e, '#container-img1', '#img-preview1'));
                    }
                } else if (sliderId === 'slider2') {
                    const imgSlider2 = document.querySelector('#main #imgSlider2');
                    const inicio = {!! json_encode($inicio) !!};
                    if (inicio.imgSlider2) {
                        imgSlider2.addEventListener('change', (e) => previewEdit(e, '#img-preview2'));
                    } else {
                        imgSlider2.addEventListener('change', (e) => previewCreate(e, '#container-img2', '#img-preview2'));
                    }
                } else if (sliderId === 'slider3') {
                    const imgSlider3 = document.querySelector('#main #imgSlider3');
                    const inicio = {!! json_encode($inicio) !!};
                    if (inicio.imgSlider3) {
                        imgSlider3.addEventListener('change', (e) => previewEdit(e, '#img-preview3'));
                    } else {
                        imgSlider3.addEventListener('change', (e) => previewCreate(e, '#container-img3', '#img-preview3'));
                    }
                }
            }

            document.getElementById('btn1').addEventListener('click', function() {
                showSlider('slider1');
            });

            document.getElementById('btn2').addEventListener('click', function() {
                showSlider('slider2');
            });

            document.getElementById('btn3').addEventListener('click', function() {
                showSlider('slider3');
            });

            showSlider('slider1'); // Show slider 1 by default
        });

        function previewEdit(event, previewId) {
            const image = event.target;
            const imgPreview = document.querySelector(previewId);
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

        function previewCreate(event, containerId, previewId) {
            const image = event.target;
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                let div = document.querySelector(containerId);
                div.innerHTML = '';
                let img = document.createElement('img');
                img.setAttribute('id', previewId.replace('#', ''));
                img.setAttribute('alt', 'Imagen actual');
                img.setAttribute('style', 'max-width: 100px; max-height: 100px;');
                img.src = oFREvent.target.result;
                div.appendChild(img);
            }
        }

        // Si existe alert info se elimine en 5 segundos
        setTimeout(() => {
            let alertElement = document.getElementById('alert');
            if (alertElement) {
                alertElement.remove();
            }
        }, 5000);
    </script>
@stop
