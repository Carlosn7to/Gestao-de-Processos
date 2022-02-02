@extends('web._layouts.html')

@section('title', 'Login - Gestão de Processos')

@section('content')
    <login-component
        route_home="{{ route('app.home') }}"
        image_background_login="{{ asset('background/background-login.jpg') }}"
        image_logo="{{ asset('logo_completa.png') }}"
        image_logo_system="{{ asset('logo_system.png') }}"
    ></login-component>
@endsection
