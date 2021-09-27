@extends('layouts.myleilosoc')
@section('meio')
    <div class="perfil-settings">

        <div class="campo mb-3 ">
            <label class="form-label" for="nome">Nome</label>
            <input class="form-control" type="text" id="nome" value="Ana Santos [ID 12674943]"
                aria-label="Disabled input example" disabled readonly>
        </div>

        <div class="campo mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="text" id="email" value="ana.m.f.santos@gmail.com">
        </div>

        <div class="campo mb-3">
            <label class="form-label" for="morada">Password</label>
            <input class="form-control" type="password" id="morada" value="•••••••••">
        </div>

        <div class="campo mb-3">
            <label class="form-label" for="cel">Telemóvel</label>
            <input class="form-control" type="text" id="cel" value="912578495">
        </div>

        <div class="campo mb-3">
            <label for="idioma">Idioma</label>
            <select class="form-select" id="idioma" aria-label="Default select example">
                <option selected value="1">Português</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>

        <div class="mb-3 check-box">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Aceito receber campanhas por SMS.</label>
        </div>

        <div class="btn-guardar">
            <button class="btn btn-primary">Guardar</button>
        </div>

    </div>
@endsection
