@extends('layouts.estruturaDaPagina')

@section('titulo', 'SIA Eventos - Eventos')

@section('conteudo')

<div class="espaco"></div>
<div class="espaco"></div>

@if (session('success'))
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Feito!</h4>
        <p>{{ session('success') }}</p>
      </div>
@endif

@if($existAnEvent == true)
<h1>Eventos Agendados</h1>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Data</th>
        </tr>
        </thead>

    <tbody>
    @foreach ($eventos as $e)
        <tr>
        <td>{{$e->title}}</td>
        <td>{{$e->data}}</td>
        </tr>
    @endforeach
    </tbody>
    </table>
    {{$eventos->links()}}
    @else
    <h1>Ainda não há nenhum evento agendado.</h1>
@endif

@endsection
