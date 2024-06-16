@extends('layouts.template')

@section('title', 'PescaMaestra')
@section('style')
<link rel="icon" href="images/fish-logo.png" type="image/x-icon">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/formStyle.css') }}">
@endSection

@section('content')
<div class="login-container">
    <div class="titulo">
        <img src="{{ asset('images/fish.png') }}" alt="Logo">
        <a href="/">
            <h1><b>PescaMaestra</b></h1>
        </a>
    </div>
    <form method="POST" action="{{ route('inicia-sesion') }}" class="login-form">
        <h1 class="text-center"><b>Iniciar Sesión</b></h1>
        @csrf
        <div class="form-group">
            <input type="email" name="email" class="form-control" id="email" required autocomplete="off"
                placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" id="password" required autocomplete="off"
                placeholder="Contraseña">
            <span class="toggle-password" onclick="togglePassword()"><img src="{{ asset('images/crossed-eyes.png') }}"
                    alt="Show/Hide Password" width="20"></span>
        </div>
        <button type="submit" class="btn btn-primary"><b>INGRESAR</b></button>
        <div class="forgot-password">
            <a href="/register"><b>¿No tienes cuenta aún?</b></a>
            <a href="/forgot-password"><b>¿Olvidaste tu contraseña?</b></a>
        </div>
    </form>
</div>
<script>
    function togglePassword() {
        var passwordField = document.getElementById("password");
        var toggleBtn = document.querySelector(".toggle-password");

        if (passwordField.type === "password") {
            passwordField.type = "text";
            toggleBtn.innerHTML = '<img src="/images/eye.png" alt="Hide Password" width="20">';
        } else {
            passwordField.type = "password";
            toggleBtn.innerHTML = '<img src="/images/crossed-eyes.png" alt="Show Password" width="20">';
        }
    }

</script>
@endSection
