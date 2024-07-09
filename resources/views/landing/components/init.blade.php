<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>{{$inicio->titulo}}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{$inicio->keywords}}" name="keywords">
    <meta content="{{$inicio->description}}" name="description">

    <!-- Favicon -->
    <link href="{{ asset($inicio->icon)}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
