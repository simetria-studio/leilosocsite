@extends('layouts.backoffice')
@section('content')
    <div class="container">
        <div class="titulo">
            <h1>Editar Admin</h1>
        </div>
        <form action="{{ route('admin.update', $user->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="mb-3 col-6">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3 col-6">
                    <label for="exampleFormControlInput1" class="form-label">Confirmar Email</label>
                    <input type="email" class="form-control" value="{{ $user->email }}" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3 col-6">
                    <label for="exampleFormControlInput1" class="form-label">Senha</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="col-6 mb-4">
                    <label for="nome">Nome *</label>
                    <input class="form-control" type="text" value="{{ $user->info->nome }}" name="nome" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="apelido">Apelido *</label>
                    <input class="form-control" type="text" value="{{ $user->info->apelido }}" name="apelido" id="apelido">
                </div>
                <div class="col-4 mb-4">
                    <label for="pais">País *</label>
                    <select class="form-control" aria-label="Default select example" name="pais" id="pais">
                        <option value="1" {{($user->info->pais === '1') ? 'Selected' : ''}}>Portugal</option>
                        <option value="2" {{($user->info->pais === '2') ? 'Selected' : ''}}>Moçambique</option>
                        <option value="3" {{($user->info->pais === '3') ? 'Selected' : ''}}>Espanha</option>
                    </select>
                </div>
                <div class="col-4 mb-4">
                    <label for="codigo">Código País *</label>
                    <select class="form-control" aria-label="Default select example" name="codigo_pais" id="codigo">
                        <option value="1" {{($user->info->codigo_pais === '1') ? 'Selected' : ''}}>(+351) Portugal</option>
                        <option value="2" {{($user->info->codigo_pais === '2') ? 'Selected' : ''}}>(+258) Moçambique</option>
                        <option value="3" {{($user->info->codigo_pais === '3') ? 'Selected' : ''}}>(+34) Espanha</option>
                    </select>
                </div>
                <div class="col-4 mb-4">
                    <label for="telemovel">Telemovel *</label>
                    <input class="form-control" value="{{ $user->info->telemovel }}" type="text" name="telemovel" id="telemovel">
                </div>
                <div class="col-12 mb-4">
                    <label for="nome">Morada *</label>
                    <input class="form-control" value="{{ $user->info->morada }}" type="text" name="morada" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="nome">Código Postal *</label>
                    <input class="form-control" value="{{ $user->info->codigo_postal }}" type="text" name="codigo_postal" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="nome">Localidade *</label>
                    <input class="form-control" value="{{ $user->info->localidade }}" type="text" name="localidade" id="nome">
                </div>
                <div class="col-6 mb-4">
                    <label for="data">data de nascimento *</label>
                    <input class="form-control" value="{{ $user->info->data_nascimento }}" type="date" name="data_nascimento" id="data">
                </div>
                <div class="col-6 mb-4">
                    <label for="nome">NÚMERO DE IDENTIFICAÇÃO FISCAL *</label>
                    <input class="form-control" value="{{ $user->info->nif }}" type="text" name="nif" id="nome">
                </div>
                <div class="mb-5 text-center">
                    <button type="submit" class="btn btn-dark">Alterar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
