@extends('layouts.backoffice')
@section('content')
    <div class="container">
        <div class="titulo">
            <h1>Usuários</h1>
        </div>
        <div class="row justify-content-center text-center users">
            <div class="col-md-4 col-4">
                <a href="{{ route('admins') }}">
                    <i class="fas fa-user"></i>
                    <p>Admins</p>
                </a>
            </div>
            <div class="col-md-4 col-4">
                <a href="">
                    <i class="far fa-user"></i>
                    <p>Usuários</p>
                </a>
            </div>
        </div>
    </div>
@endsection
