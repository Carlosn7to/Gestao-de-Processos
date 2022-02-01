@extends('web._layouts.html')

@section('title', 'Login - Gestão de Processos')

@section('content')
    <login-component
        route_home="{{ route('app.home') }}"
        image_background_login="{{ asset('background/web.jpg') }}"
        image_logo="{{ asset('logo.png') }}"
    ></login-component>
@endsection
