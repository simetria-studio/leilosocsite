@extends('layouts.backoffice')
@section('content')
    <div class="container">
        <div class="titulo">
            <h1>Banner Rotativo <br> 1290x600px</h1>
        </div>
    </div>
    <div id="banner-container">
        @foreach ($banners as $banner)
            <div class="banner mb-3" id="banner-{{$banner->id}}">
                <div class="carregar">
                    <form action="{{route('banner')}}">
                        <input type="hidden" name="id" value="{{$banner->id}}">
                        <div>
                            <label for="arquivo-{{$banner->id}}">
                                <img src="/assets/img/backoffice/img.png" alt="">
                                Carregar imagem (JPG, GIF, PNG)
                            </label>
                            <input type="file" name="arquivo" id="arquivo-{{$banner->id}}" data-id="{{$banner->id}}">
                        </div>
                    </form>
                </div>
                <div class="amostra">
                    <div class="acoes">
                        <div class="lixeira">
                            <button class="btn btn-excluir-banner" data-id="{{$banner->id}}" data-route="{{route('banner')}}">
                                <img src="/assets/img/backoffice/lixeira.png" alt="">
                            </button>
                        </div>
                        <div class="olho">
                            <button class="btn btn-olhar-banner" data-bs-toggle="modal" data-bs-target="#modalImagem">
                                <img src="/assets/img/backoffice/olho.png" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="banner-img">
                        <img src="{{asset('storage/'.$banner->path)}}" alt="">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="banner d-flex justify-content-center mb-5">
        <div class="carregar">
            <form action="{{route('banner')}}">
                <div>
                    <label for="new_arquivo">
                        <img src="{{ url('assets/img/backoffice/img.png') }}" alt="">
                        Carregar imagem (JPG, GIF, PNG)
                    </label>
                    <input type="file" name="new_arquivo" id="new_arquivo" data-route="{{route('banner')}}">
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="modalImagem" tabindex="-1" aria-labelledby="modalImagemLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <img class="imgModal" width="100%" src="{{ url('assets/img/backoffice/banner-teste.png') }}">
            </div>
        </div>
    </div>
@endsection
