$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Novo banner
    $(document).on('change', '[name="new_arquivo"]', function(){
        var preview = '';
        var files   = $(this).prop('files')[0];
        var route   = $(this).data('route');

        function readAndPreview(file) {
            // Make sure `file.name` matches our extensions criteria
            if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
                var reader = new FileReader();

                reader.addEventListener("load", function () {
                    preview = this.result;
                }, false);

                reader.readAsDataURL(file);
            }
        }

        readAndPreview(files);

        var form = $(this).closest('form');

        $.ajax({
            url: form.attr('action'),
            type: "POST",
            data: new FormData(form[0]),
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                // console.log(data);

                $('#banner-container').append('<div class="banner mb-3" id="banner-'+data+'">'+
                    '<div class="carregar">'+
                        '<form action="'+route+'">'+
                            '<input type="hidden" name="id" value="{{$banner->id}}"></input>'+
                            '<div>'+
                                '<label for="arquivo-'+data+'">'+
                                    '<img src="/assets/img/backoffice/img.png" alt="">'+
                                    'Carregar imagem (JPG, GIF, PNG)'+
                                '</label>'+
                                '<input type="file" name="arquivo" id="arquivo-'+data+'" data-id="'+data+'">'+
                            '</div>'+
                        '</form>'+
                    '</div>'+
                    '<div class="amostra">'+
                        '<div class="acoes">'+
                            '<div class="lixeira">'+
                                '<button class="btn btn-excluir-banner" data-id="'+data+'" data-route="'+route+'">'+
                                    '<img src="/assets/img/backoffice/lixeira.png" alt="">'+
                                '</button>'+
                            '</div>'+
                            '<div class="olho">'+
                                '<button class="btn btn-olhar-banner" data-bs-toggle="modal" data-bs-target="#modalImagem">'+
                                    '<img src="/assets/img/backoffice/olho.png" alt="">'+
                                '</button>'+
                            '</div>'+
                        '</div>'+
                        '<div class="banner-img">'+
                        '<img src="'+preview+'" alt="">'+
                        '</div>'+
                    '</div>'+
                '</div>');
            },
            error: (err) => {
                // console.log(err);
                if(err.responseJSON.errors){
                    Swal.fire({
                        icon: "error",
                        title: "Imagem muito grande",
                        text: "A imagem deve ter 1290 x 600 px no maximo",
                    });
                }
            }
        });
    });
    // Alterar banner
    $(document).on('change', '[name="arquivo"]', function(){
        var preview = '';
        var files   = $(this).prop('files')[0];
        var id      = $(this).data('id');

        function readAndPreview(file) {
            // Make sure `file.name` matches our extensions criteria
            if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
                var reader = new FileReader();

                reader.addEventListener("load", function () {
                    preview = this.result;
                }, false);

                reader.readAsDataURL(file);
            }
        }

        readAndPreview(files);

        var form = $(this).closest('form');

        $.ajax({
            url: form.attr('action'),
            type: "POST",
            data: new FormData(form[0]),
            cache: false,
            contentType: false,
            processData: false,
            success: (data) => {
                // console.log(data);

                $('#banner-'+id).find('.banner-img').find('img').attr('src', preview);
            },
            error: (err) => {
                // console.log(err);
                if(err.responseJSON.errors){
                    Swal.fire({
                        icon: "error",
                        title: "Imagem muito grande",
                        text: "A imagem deve ter 1290 x 600 px no maximo",
                    });
                }
            }
        });
    });
    // Apagar banner
    $(document).on('click', '.btn-excluir-banner', function(){
        var id      = $(this).data('id');
        var route   = $(this).data('route');

        Swal.fire({
            icon: 'warning',
            title: 'Apagar o Banner?',
            showCancelButton: true,
            confirmButtonText: 'Sim',
            CancelButtonText: 'Cancelar',
        }).then((result) => {
            if(result.isConfirmed) {
                $.ajax({
                    url: route,
                    type: 'DELETE',
                    data: {id},
                    success: function(data) {
                        $('#banner-'+id).remove();
                    }
                });
            }
        });
    });
    // Visualizar imagem
    $(document).on('click', '.btn-olhar-banner', function(){
        var image = $(this).closest('.amostra').find('.banner-img').find('img').attr('src');

        $('#modalImagem').find('.imgModal').attr('src', image);
    });
});

//apagar usuários

$(document).on('click', '.btn-excluir-user', function(){
    var id      = $(this).data('id');
    var route   = $(this).data('route');

    Swal.fire({
        icon: 'warning',
        title: 'Apagar o Usuário?',
        showCancelButton: true,
        confirmButtonText: 'Sim',
        CancelButtonText: 'Cancelar',
    }).then((result) => {
        if(result.isConfirmed) {
            $.ajax({
                url: route,
                type: 'POST',
                data: {id},
                success: function(data) {
                    location.reload();
                }
            });
        }
    });
});
