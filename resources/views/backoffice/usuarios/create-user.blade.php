@extends('layouts.backoffice')
@section('content')
    <div class="container">
        <div class="titulo">
            <h1>Criar Usuário</h1>
        </div>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3 col-6">
                    <label for="exampleFormControlInput1" class="form-label">Confirmar Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3 col-6">
                    <label for="exampleFormControlInput1" class="form-label">Senha</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="col-6 mb-4">
                    <label for="nome">Nome *</label>
                    <input class="form-control" type="text" name="nome" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="apelido">Apelido *</label>
                    <input class="form-control" type="text" name="apelido" id="apelido">
                </div>
                <div class="col-4 mb-4">
                    <label for="pais">País *</label>
                    <select class="form-control" aria-label="Default select example" name="pais" id="pais">
                        <option selected>Selecionar País</option>
                        <option value="1">Portugal</option>
                        <option value="2">Moçambique</option>
                        <option value="3">Espanha</option>
                    </select>
                </div>
                <div class="col-4 mb-4">
                    <label for="codigo">Código País *</label>
                    <select class="form-control" aria-label="Default select example" name="codigo_pais" id="codigo">
                        <option selected>Selecionar Código</option>
                        <option value="1">(+351) Portugal</option>
                        <option value="2">(+258) Moçambique</option>
                        <option value="3">(+34) Espanha</option>
                    </select>
                </div>
                <div class="col-4 mb-4">
                    <label for="telemovel">Telemovel *</label>
                    <input class="form-control" type="text" name="telemovel" id="telemovel">
                </div>
                <div class="col-12 mb-4">
                    <label for="nome">Morada *</label>
                    <input class="form-control" type="text" name="morada" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="nome">Código Postal *</label>
                    <input class="form-control" type="text" name="codigo_postal" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="nome">Localidade *</label>
                    <input class="form-control" type="text" name="localidade" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="data">data de nascimento *</label>
                    <input class="form-control" type="date" name="data_nascimento" id="data">
                </div>
                <div class="col-6 mb-4">
                    <label for="nome">NÚMERO DE IDENTIFICAÇÃO FISCAL *</label>
                    <input class="form-control" type="text" name="nif" id="nome">
                </div>
                <div class="mb-5 text-center">
                    <button type="submit" class="btn btn-dark">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
