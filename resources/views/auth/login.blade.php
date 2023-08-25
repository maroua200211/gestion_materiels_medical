@extends('layouts.app')

@section('title')
    Employes Management System | Login
@endsection

@section('content')

<style>
     body {
        background: #fbfbfb;
        background: -webkit-linear-gradient(to right, #ff8686, #eb3e3e, #c24e4e);
        background: linear-gradient(to right, #ef4040, #f1f1f1, #ff3c3c);
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
        margin: 0;
    }
body {
    background-color: rgba(255, 94, 0, 0.717);
    font-family: 'Asap', sans-serif;
}

.login {
    overflow: hidden;
    background-color: rgb(190, 12, 12);
    padding: 40px 30px 30px 30px;
    border-radius: 10px;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    transform: translate(-50%, -50%);
    transition: transform 300ms, box-shadow 300ms;
    box-shadow: 5px 10px 10px rgba(2, 128, 144, 0.2);
}

.login::before,
.login::after {
    content: '';
    position: absolute;
    width: 600px;
    height: 600px;
    border-top-left-radius: 40%;
    border-top-right-radius: 45%;
    border-bottom-left-radius: 35%;
    border-bottom-right-radius: 40%;
    z-index: -1;
}
@keyframes wawes {
    from {
        transform: rotate(3.142rad);
    }
    to {
        transform: rotate(500deg);
    }
}
.login::before {
    left: 40%;
    bottom: -130%;
    background-color: rgba(69, 105, 144, 0.15);
    animation: wawes 6s infinite linear;
}

.login::after {
    left: 35%;
    bottom: -125%;
    background-color: rgba(2, 128, 144, 0.2);
    animation: wawes 7s infinite;
}

.login > form input {
    font-family: 'Asap', sans-serif;
    display: block;
    border-radius: 5px;
    font-size: 16px;
    background: white;
    width: 100%;
    border: 0;
    padding: 10px 10px;
    margin: 15px -10px;
}

.login > form button {
    font-family: 'Asap', sans-serif;
    cursor: pointer;
    color: #f00000;
    font-size: 16px;
    text-transform: uppercase;
    width: 80px;
    border: 0;
    padding: 10px 0;
    margin-top: 10px;
    margin-left: -5px;
    border-radius: 5px;
    background-color: rgb(254, 254, 255);
    transition: background-color 300ms;
}

.login > form button:hover {
    background-color: rgb(255, 0, 0);
}

.login a {
    text-decoration: none;
    color: rgba(253, 246, 246, 0.6);
    position: absolute;
    right: 10px;
    bottom: 10px;
    font-size: 12px;
}
label{
    font-size:25px;
    margin-right: 100px;
    
}

</style>

<div class="login">
    <form method="GET" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label " >Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="mb-3">
           
            <form action="{{ route('products')}}" method="POST">
                <button type="submit" class="btn btn-primary">Connexion</button>
          </form>
        </div>
    </form>
</div>

@endsection
