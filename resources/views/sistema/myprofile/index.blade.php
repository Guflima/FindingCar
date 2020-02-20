@extends('layouts.estruturaDaPagina')

@section('titulo', 'SIA Eventos - Meu Perfil')


    <!--Aditional css-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">


@section('conteudo')

<div class="container emp-profile">

    @if (session('success'))
        @lang('alerts.successEdition')
    @endif


    @if (session('error'))
        @lang('alerts.error')
    @endif

            <form method="post">
                <div class="row">
                    <br>
                    <div class="col-md-2 d-md-block d-lg-none">
                        <a href="{{ route('myprofile.edit') }}">
                            <button type="button" class="btn btn-primary ">@lang('sistema\myprofile\index.editar_perfil1')</button>
                        </a>
                        <div class="espaco"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-img">
                            @if(auth()->user()->image != null)
                            <img class="img-profile " style="width: 15em; height: 15em"  src="{{ url('storage/images/users/'.auth()->user()->image) }}">
                            @else
                                <img class="img-profile " src="https://www.auctus.com.br/wp-content/uploads/2017/09/sem-imagem-avatar.png">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{ Auth::user()->name }} {{ Auth::user()->last_name}}
                                    </h5>
                                    <h6>
                                        @if (auth()->user()->role_id == 5)
                                            @lang('sistema\myprofile\index.administrador_geral')
                                        @else
                                            @lang('sistema\myprofile\index.usuario_padrao')
                                        @endif
                                    </h6>
                                    <p class="proile-rating">Facebook : <strong>
                                        @if(auth()->user()->facebook == null)
                                            Sem dados
                                        @else
                                            <a target="_blank" href="">
                                                {{ auth()->user()->name }}
                                            </a>
                                        @endif
                                            </strong>
                                        </p>
                                    <p class="proile-rating">Instagram :
                                        <strong>
                                        @if(auth()->user()->facebook == null)
                                            Sem dados
                                        @else
                                            <a target="_blank" href="">
                                                {{ auth()->user()->name }}
                                            </a>
                                        @endif
                                        </strong>
                                    </p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dados do Sistema</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Dados Pessoais</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 d-none d-md-block">
                        <a href="{{ route('myprofile.edit') }}">
                            <button type="button" class="btn btn-primary ">@lang('sistema\myprofile\index.editar_perfil')</button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <div class="d-none d-md-block">
                                <h3>@lang('sistema\myprofile\index.imagem_de_perfil')</h3>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.identificador')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->id }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.nome')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->name }} {{ Auth::user()->last_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.email')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ Auth::user()->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.perfil_de_acesso')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    @if (auth()->user()->role_id == 5)
                                                        @lang('sistema\myprofile\index.administrador_geral')
                                                    @else
                                                        @lang('sistema\myprofile\index.usuario_padrao')
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.CPF')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->cpf }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.CEP')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->cep }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.cidade')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->cidade }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.bairro')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->bairro }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.rua')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->rua }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.número_do_complemento')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->numero_do_complemento }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.telefone_comercial')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->telefone_comercial }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>@lang('sistema\myprofile\index.telefone_celular')</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ auth()->user()->telefone_celular }}</p>
                                            </div>
                                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

@endsection
