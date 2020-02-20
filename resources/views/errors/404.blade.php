@extends('layouts.errors')

@section('titulo', 'SIA Eventos - Não Encontrado')

@section('alinhamento', 'conteudoCentral')

@section('conteudo')
    <img src="{{ asset('imagens/icon/notFoundBot.svg') }}"
        style="width: 13em; height: 13em;"
    />
    <strong>Ops... A página solicitada não existe</strong>
    <br>  
    <span>Há algo de errado? Comunique os desenvolvedores</span>
    <br>
    <strong>barbosacarneirowellington@gmail.com</strong>
    <br>
    <strong>elgsongabriel@gmail.com</strong>
    <br>
    <span>Código de Erro - <strong>404</strong></span>
    <br>
    <hr>
    @voltar
    @endvoltar
    <a href="{{ route('home.index') }}">
        <button class="btn btn-dark">Home</button>
    </a>
    <hr>
@endsection

