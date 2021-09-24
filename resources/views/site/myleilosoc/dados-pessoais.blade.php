@extends('layouts.myleilosoc')
@section('meio')
    <div class="dados-pessoais">
        <div class="row">
            <div class="col-6 mb-3 ">
                <label class="form-label" for="nome">Nome*</label>
                <input class="form-control" type=" text" id="nome">
            </div>
            <div class="col-6 mb-3">
                <label class="input-group-text" for="inputGroupSelect01">País*</label>
                <select class="form-select" id="inputGroupSelect01">
                    <option selected>Portugal</option>
                </select>
            </div>

            <div class="col-6 mb-3">
                <label class="form-label" for="cc">CC*</label>
                <input class="form-control" type="text" id="cc">
            </div>
            <div class="col-6 mb-3">
                <label class="form-label" for="nif">NIF*</label>
                <input class="form-control" type="text" id="nif">
            </div>

            <div class="col-12 mb-3">
                <label class="form-label" for="email">Email*</label>
                <input class="form-control" type="text" id="email">
            </div>
            <div class="col-12 mb-3">
                <label class="form-label" for="morada">Morada*</label>
                <input class="form-control" type="text" id="morada">
            </div>

            <div class="col-6 mb-3">
                <label class="form-label" for="cep">Código Postal*</label>
                <input class="form-control" type="text" id="cep">
            </div>
            <div class="col-6 mb-3">
                <label class="form-label" for="localidade">Localidade*</label>
                <input class="form-control" type="text" id="localidade">
            </div>

            <div class="col-6 mb-3">
                <label class="form-label" for="tel">Telefone*</label>
                <input class="form-control" type="text" id="tel">
            </div>
            <div class="col-6 mb-3">
                <label class="form-label" for="cel">Telemóvel*</label>
                <input class="form-control" type="text" id="cel">
            </div>


            <div class="col-12 mb-3">
                <label for="comprovante" class="form-label">Comprovativo Morada</label>
                <input class="form-control" type="file" id="comprovante">
            </div>


            <div class="col-6 mb-3">
                <label class="form-label" for="iban">IBAN</label>
                <input class="form-control" type="text" id="iban">
            </div>
            <div class="col-6 mb-3">
                <label class="form-label" for="swift">SWIFT</label>
                <input class="form-control" type="text" id="swift">
            </div>
            <div>
                <button class="btn btn-primary">Guardar Alterações</button>
            </div>
        </div>
    </div>
@endsection
