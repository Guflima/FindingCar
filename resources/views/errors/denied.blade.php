@extends('layouts.errors')

@section('titulo', 'SIA Eventos - Não Encontrado')

@section('alinhamento', 'conteudoCentral')

@section('conteudo')
    <img src="{{ asset('imagens/icon/stop.png') }}"
        style="width: 10em; height: 10em;"
    />
    <strong>Ops... Esta página é restrita</strong>
    <br>
    <span>Há algo de errado? Comunique os desenvolvedores</span>
    <br>
    <strong>barbosacarneirowellington@gmail.com</strong>
    <br>
    <strong>elgsongabriel@gmail.com</strong>
    <br>
    <span>Código de Erro - <strong>DENIED</strong></span>
    <br>
    <hr>
    @voltar
    @endvoltar
    <a href="{{ route('home.index') }}">
        <button class="btn btn-dark">Home</button>
    </a>
    <hr>
@endsection

