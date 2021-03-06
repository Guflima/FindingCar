@extends('layouts.estruturaDaPagina')

@section('titulo', 'SIA Eventos - Editar Meu Perfil')

@section('conteudo')

    <div class="emp-profile">
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <form enctype="multipart/form-data" action="{{ route('user.completar-registro') }}" method="POST">

            <div class="row">
            @csrf
            @method('PUT')
            <div class="col-md-3 register-left">
                @if(auth()->user()->image != null)
                    <img style="width: 15em; height: 15em" id="blah" src="{{ url('storage/images/users/'.auth()->user()->image) }}">
                @else
                    <img class="img-profile " style="width: 15em; height: 15em" id="blah" src="https://www.auctus.com.br/wp-content/uploads/2017/09/sem-imagem-avatar.png">
                @endif
                <h3>@lang('sistema/myprofile/edit.imagem_de_perfil')</h3>
                <input type="file" class="btn btn-secondary" name="image" id="image">
            </div>

            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Complete seu perfil, <strong>{{ auth()->user()->name }}</strong></h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">@lang('sistema/myprofile/edit.nome')</label>
                                    <input class="form-control" required type="text" name="name" id="name" value="{{ auth()->user()->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">@lang('sistema/myprofile/edit.email')</label>
                                    <input class="form-control" required type="email" name="email" id="email" value="{{ auth()->user()->email }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">@lang('sistema/myprofile/edit.sobrenome')</label>
                                    <input class="form-control" required type="text" name="last_name" id="last_name" value="{{ auth()->user()->last_name }}">
                                </div>
                                <div class="form-group">
                                    <label id="cepLabel">CEP *</label>
                                    <label id="success" style="display: none; color: #5cb85c;">CEP Localizado!</label>
                                    <label  id="errorCep"style="display: none;">O CEP digitado não existe.</label>
                                    <label id="errorCepRegiao" style="display: none;">Desculpe-nos, ainda não atendemos esta região.</label>
                                    <input type="text" required class="form-control" name="cep" id="cepcep">
                                    <img style="widht:2em; height:2em; margin-left: 1em;
                                                margin-top: 0.5em; cursor: pointer; " src="{{asset('img/icon/searchbk.png') }}" />
                                    <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/buscaCepEndereco.cfm" target="_blank" style=" margin-top: 0.8em; margin-left: 0.5em; font-size: 0.8em; ">Não sei meu CEP</a>
                                </div>
                            </div>

                            <!--hidden inputs-->

                            <input type="hidden" name="estado" id="estado">

                            <input type="hidden" name="cidade" id="cidade">

                            <input type="hidden" name="bairro" id="bairro">

                            <input type="hidden" name="rua" id="rua">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="numero_do_complemento">Número do Complemento *</label>
                                    <input class="form-control" required type="text" name="numero_do_complemento" id="numero_do_complemento" value="{{ auth()->user()->numero_do_complemento }}">
                                </div>
                                <div class="form-group">
                                    <label for="telefone_comercial">Telefone Comercial *</label>
                                    <input class="form-control" required type="text" name="telefone_comercial" id="telefone_comercial" value="{{ auth()->user()->telefone_comercial }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cpf">CPF *</label>
                                    <input class="form-control" required type="text" name="cpf" id="cpf" value="{{ auth()->user()->cpf }}">
                                </div>
                                <div class="form-group">
                                    <label for="telefone_celular">Telefone Celular</label>
                                    <input class="form-control" type="text" name="telefone_celular" id="telefone_celular" value="{{ auth()->user()->telefone_celular }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Nova Senha *</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="espaco"></div>
                                    <button id="completar_perfil" type="submit" class="btn btn-dark">
                                        <img src="{{ asset('imagens/icon/confirm.png') }}" alt=""
                                    style=" width: 1.5em; height: 1.5em; margin-right: 2px;"> Completar Perfil</button>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password-confirm">Confirmar Nova Senha *</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
            }

            $("#image").change(function() {
            readURL(this);
            });
    </script>

    <!-- Jquery-->
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>

    <!--bots-->
    <script>
        $(document).ready(function(){

 $("#cepcep").focusout(function(e) {
 //Logica aqui
 //Início do Comando AJAX
 $.ajax({
     url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
     dataType: 'json',
     beforeSend: function () {
         $("#cepLabel").html("Buscando...");
     },
     success: function(resposta) {
        $("#completar_perfil").attr("disabled", false);
         document.getElementById('cepLabel').style.display = "none";
         document.getElementById('success').style.display = "block";
         document.getElementById('errorCep').style.display = "none";
         document.getElementById('errorCepRegiao').style.display = "none";

         $("#estado").val(resposta.uf);
         $("#cidade").val(resposta.localidade);
         $("#bairro").val(resposta.bairro);
         $("#rua").val(resposta.logradouro);

         if(resposta.uf == undefined){
             document.getElementById('errorCepRegiao').style.display = "none";
             document.getElementById('success').style.display = "none";
             document.getElementById('cepLabel').style.display = "none";
             document.getElementById('errorCep').style.display = "block";
             document.getElementById('errorCep').style.color = "red";
             $("#completar_perfil").attr("disabled", true);
             $('#cepcep').focus();
         }else{
             if(cidadeAtendida == undefined){
                 document.getElementById('errorCepRegiao').style.display = "none";
                 document.getElementById('success').style.display = "none";
                 document.getElementById('cepLabel').style.display = "none";
                 document.getElementById('errorCepRegiao').style.color = "red";
                 document.getElementById('errorCepRegiao').style.display = "block";
                 $("#completar_perfil").attr("disabled", true);
             }else{
                 $("#completar_perfil").attr("disabled", false);
                 $('#numero_do_complemento').focus();
             }
         }


     },
     /* Se valor digitado invalido */
     error: function() {
         document.getElementById('errorCepRegiao').style.display = "none";
         document.getElementById('success').style.display = "none";
         document.getElementById('cepLabel').style.display = "none";
         document.getElementById('errorCep').style.display = "block";
         document.getElementById('errorCep').style.color = "red";
         $('#cepcep').focus();
         $("#completar_perfil").attr("disabled", true);
     }
 });
});



});
    </script>

@endsection
