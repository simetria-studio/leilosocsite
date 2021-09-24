@extends('layouts.backoffice')
@section('content')
    <div class="container">
        <div class="titulo">
            <h1>Admins</h1>
        </div>
        <div>
            <div>
               <a href="{{ route('admin.create') }}"> <button class="btn btn-dark my-3">Cadastrar novo</button></a>
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
                        <td>{{ $user->info->nome ?? '' }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <div>
                                    <button class="btn btn-danger btn-excluir-user" data-id="{{$user->id}}" data-route="{{route('user.delete')}}">Excluir</button>
                                </div>
                                <div>
                                  <a href="{{ route('admin.show', $user->id) }}"> <button class="btn btn-dark">Editar</button></a>
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
