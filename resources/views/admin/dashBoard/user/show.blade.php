@extends('layouts/admin.dashboard')

@section('titulo', 'SIA Eventos - Visualizar Usuário')

@section('mainContent')
<div class="container bootstrap snippet">
    <h3>Você está visualizando o usuário  <strong>{{ $usuario->nomeCompleto}}</strong>  </h3>


    <h6>Número Identificador <strong>{{ $usuario->id }}</strong></h6>
    <h6>Email <strong>{{ $usuario->email}}</strong> </h6>
    <h6>CPF <strong>{{ $usuario->cpf}}</strong> </h6>
    <h6>Senha <strong>{{ $usuario->senha}}</strong> </h6>
    <h6>CEP <strong>{{ $usuario->cep}}</strong> </h6>
    <h6>Número do Complemento <strong>{{ $usuario->complemento_num}}</strong> </h6>
    <h6>Telefone (celular) <strong>{{ $usuario->telefone}}</strong> </h6>
    <h6>Cadastrado em <strong>{{ $usuario->created_at }}</strong></h6>
    <h6>Cadastrado por ...</h6>

<hr>
@voltar
@endvoltar
<hr>
</div>

@endsection