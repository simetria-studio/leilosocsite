@extends('layouts.backoffice')
@section('content')
    <div class="container">
        <div class="titulo">
            <h1>Banner Rotativo <br> 1290x600px</h1>
        </div>
    </div>
    <div class="banner mb-3">
        <div class="carregar">
            <form action="">
                <div>
                    <label for="arquivo">
                        <img src="{{ url('assets/img/backoffice/img.png') }}" alt="">
                        Carregar imagem (JPG, GIF, PNG)</label>
                    <input type="file" name="arquivo" id="arquivo">
                </div>
            </form>
        </div>
        <div class="amostra">
            <div class="acoes">
                <div class="lixeira">
                    <button class="btn">
                        <img src="{{ url('assets/img/backoffice/lixeira.png') }}" alt="">
                    </button>
                </div>
                <div class="olho">
                    <button class="btn">
                        <img src="{{ url('assets/img/backoffice/olho.png') }} " alt="">
                    </button>
                </div>
            </div>
            <div class="banner-img">
                <img src="{{ url('assets/img/backoffice/banner-teste.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="banner mb-3">
        <div class="carregar">
            <form action="">
                <div>
                    <label for="arquivo">
                        <img src="{{ url('assets/img/backoffice/img.png') }} " alt="">
                        Carregar imagem (JPG, GIF, PNG)</label>
                    <input type="file" name="arquivo" id="arquivo">
                </div>
            </form>
        </div>
        <div class="amostra">
            <div class="acoes">
                <div class="lixeira">
                    <button class="btn">
                        <img src="{{ url('assets/img/backoffice/lixeira.png') }} " alt="">
                    </button>
                </div>
                <div class="olho">
                    <button class="btn">
                        <img src="{{ url('assets/img/backoffice/olho.png') }} " alt="">
                    </button>
                </div>
            </div>
            <div class="banner-img">
                <img src="{{ url('assets/img/backoffice/image.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="banner mb-3">
        <div class="carregar">
            <form action="">
                <div>
                    <label for="arquivo">
                        <img src="{{ url('assets/img/backoffice/img.png') }} " alt="">
                        Carregar imagem (JPG, GIF, PNG)</label>
                    <input type="file" name="arquivo" id="arquivo">
                </div>
            </form>
        </div>
        <div class="amostra">
            <div class="acoes">
                <div class="lixeira">
                    <button class="btn">
                        <img src="{{ url('assets/img/backoffice/lixeira.png') }} " alt="">
                    </button>
                </div>
                <div class="olho">
                    <button class="btn">
                        <img src="{{ url('assets/img/backoffice/olho.png') }} " alt="">
                    </button>
                </div>
            </div>
            <div class="banner-img">
                <img src="{{ url('assets/img/backoffice/image.png') }} " alt="">
            </div>
        </div>
    </div>

    </div>
@endsection
