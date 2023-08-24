<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/location-description.css">

    <title>Travel app</title>
</head>
<body>
@extends('layouts.app')


@section('content')

<div class="app">
    <div class="app-container">

    <!-- error validations -->
    @if ($errors->any())
        <div class="alert alert-danger" style="position:absolute">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="wrapper">
            <div class="main">
                <input type="checkbox" id="chk" aria-hidden="true">

                <div class="signup">
                    <form id="registerForm" method="POST" action="{{ route('register') }}">
                        @csrf
                        <label for="chk" aria-hidden="true">Sign up</label>
                        <input type="text" name="register_name" placeholder="User name" required="">
                        <input type="email" name="register_email" placeholder="Email" required="">
                        <input type="password" name="register_password" placeholder="Password" required="">
                        <input id="password-confirm" type="password" class="form-control" name="register_password_confirmation" required>
                        <button for="registerForm" type="submit">Sign up</button>
                    </form>
                </div>

                <div class="login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="chk" aria-hidden="true">Login</label>
                        <input type="email" name="email" placeholder="Email" required="">
                        <input type="password" name="password" placeholder="Password" required="">
                        <button type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

