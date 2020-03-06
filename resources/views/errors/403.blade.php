@extends('layouts.errors')

@section('titulo', 'SIA Eventos - Link Expirado')

@section('alinhamento', 'conteudoCentral')

@section('conteudo')
    <img src="{{ asset('imagens/icon/link_quebrado.svg') }}"
        style="width: 8em; height: 8em;"
    />
    <strong>Ops... Este link expirou, solicite outro</strong>
    <br>
    <span>Há algo de errado? Comunique os desenvolvedores</span>
    <br>
    <strong>barbosacarneirowellington@gmail.com</strong>
    <br>
    <strong>elgsongabriel@gmail.com</strong>
    <br>
    <span>Código de Erro - <strong>403</strong></span>
    <br>
    <hr>
    @voltar
    @endvoltar
    <a href="{{ route('home.index') }}">
        <button class="btn btn-dark">Home</button>
    </a>
    <hr>
@endsection

