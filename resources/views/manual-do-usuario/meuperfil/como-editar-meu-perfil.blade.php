<!--
    Herda uma estrutura
-->
@extends('layouts.manual-do-usuario.app')

<!--
    Título da página
-->
@section('titulo', 'SIA Eventos - Como editar meu perfil')

<!--
    Local onde será impresso o conteúdo desta view
-->
@section('conteudo')
<div class="espaco"></div>
<div class="espaco"></div>

    <h1>Como editar meu perfil do sistema?</h1>
    <br>
    <h4>Clique em seu nome no canto superior direito da barra de navegação<h4>
        <img src="{{ asset('imagens/manual/meu-perfil/meuperfil.png') }}" alt="">

        <div class="espacol"></div>

         <h4>Clique em <strong>Meu Perfil</strong><h4>
            <img src="{{ asset('imagens/manual/meu-perfil/meuperfilslc.png') }}" alt="">

            <div class="espacol"></div>

            <h4>Então, clique em <strong>Editar Perfil</strong><h4>
                <img src="{{ asset('imagens/manual/meu-perfil/editarmeuperfil.png') }}" alt="">

        <div class="espaco"></div>
        <div class="espaco"></div>

@endsection
