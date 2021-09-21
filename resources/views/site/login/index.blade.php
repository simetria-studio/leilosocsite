@extends('layouts.site')
@section('content')
    <div class="container">
        <div class="titulo text-center mt-3">
            <h1>MY LEILOSOC</h1>
        </div>
        <div class="login-registo mt-5">
            <div class="login">
                <div class="titulo">
                    <h5>LOGIN</h5>
                </div>
                <div class="mt-3">
                    <p>Por favor insira a sua informação de login.</p>
                </div>
                <div class="identifique">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <div>
                                <label class="form-label" for="email_1">ENDEREÇO DE EMAIL</label> <br>
                                <input class="form-control" type="email" name="email" id="email_1">
                            </div>
                        </div>
                        <div class=" mb-4">
                            <label class="form-label" for="senha">PALAVRA-PASSE</label>
                            <input class="form-control" type="password" name="password" id="senha" placeholder="  ">
                        </div>
                        <div class="esqueceu-senha mb-4">
                            <div>
                                <a href="">Esqueceu-se da palavra-passe?</a>
                            </div>
                            <div>
                                <a href="">Reenviar o email de validação.</a>
                            </div>
                        </div>
                        <div class="btn-login mb-4">
                            <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="registo login">
                <div class="titulo">
                    <h5>REGISTO</h5>
                </div>
                <div class="mt-3">
                    <p>Por favor insira a sua informação para se registar no My LEILOSOC.</p>
                </div>
                <div class="identifique">
                    <form action="{{ route('site.registo.store') }}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label" for="email_1">ENDEREÇO DE EMAIL</label> <br>
                            <input class="form-control" type="email" name="email" id="email_1">
                            @if($errors->has('email'))
                                <div class="error text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="email_1">CONFIRMAR DE EMAIL</label> <br>
                            <input class="form-control" type="email" id="email_1">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="senha">PALAVRA-PASSE</label>
                            <input class="form-control" type="password" name="password" id="senha" placeholder="  ">
                            @if($errors->has('password'))
                            <div class="error text-danger">{{ $errors->first('password') }}</div>
                        @endif
                        </div>
                        <div class="btn-login mb-4">
                            <button type="submit" class="btn btn-outline-primary">REGISTAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
