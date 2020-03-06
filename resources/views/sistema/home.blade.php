@extends('layouts.estruturaDaPagina')

@section('titulo', 'SIA Eventos - Home')

@section('conteudo')

<div class="espaco"></div>
<div class="espaco"></div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success" role="alert">
           {{session('success')}}
        </div>
    @endif

@if($existAnEvent == true)
<h1 id="tituloTabela">Eventos Agendados</h1>
<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search"
    placeholder="Buscar na tabela" id="busca" aria-label="search"/>
</form>
<div class="espaco"></div>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Data</th>
        </tr>
        </thead>

    <tbody>
    @foreach ($eventos as $e)
        <tr id="tableItens">
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

<!--busca provisoria-->
<script>
    $(function(){
        $("#busca").keypress(function(){
            var texto = $(this).val();

            $( "#tableItens td" ).removeClass( "none" ).addClass( "block" );

            $("#tableItens td").each(function(){
                if($(this).text().toUpperCase().indexOf(texto.toUpperCase()) < 0)
                    $( this ).removeClass( "block" ).addClass( "none" );
                    var qtd = $(".block").length;
            });
        });
    });
</script>
@endsection

