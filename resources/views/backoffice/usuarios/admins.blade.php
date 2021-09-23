@extends('layouts.backoffice')
@section('content')
    <div class="container">
        <div class="titulo">
            <h1>Admins</h1>
        </div>
        <div>
            <div>
                <button class="btn btn-dark my-3">Cadastrar novo</button>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->info->nome }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <button class="btn btn-danger">Excluir</button>
                                </div>
                                <div>
                                    <button class="btn btn-dark">Editar</button>
                                </div>
                            </div>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>

        </div>

    </div>

@endsection
