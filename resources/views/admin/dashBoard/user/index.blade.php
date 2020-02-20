@extends('layouts/admin.dashboard')

@section('titulo', 'SIA Eventos - Gerenciar Usuários')

@section('mainContent')
<div class="container bootstrap snippet">
<h1>Gerenciar Usuários</h1>

@if(session()->has('message'))
<div class="alert alert-success" role="alert">
     <h4 class="alert-heading">Feito!</h4>
     <p> {{ session()->get('message') }}</p>
</div>
@endif

@foreach ($usuarios as $u)
<hr>
Nome do usuário: {{$u['nomeCompleto'] }}
<br>
Perfil de acesso: @if ($u['perfil'] == '9')
     Desenvolvedor 
@elseif($u['perfil'] == '7')
     Gerente
@elseif($u['perfil'] == '5')
     Administrador
@elseif($u['perfil'] == '3')
     Usuário
@endif
<br>
Acesso ao sistema: @if ($u['ativo'] == '1')
     Permitido 
@else
     Negado
@endif
<br>
<a href="{{route('users.show', ['usuario' => $u->id])}}">Mais Informações</a>

<br>

<a href="{{ route('users.edit', ['usuario' => $u->id]) }}">
      <button class="btn btn-warning">Editar Informações</button>
 </a>

 <div class="espacol"></div>


 <a  data-toggle="modal" data-target="#excluirModal" href="">

      <button class="btn btn-danger">Excluir </button>

 </a>


<hr>



    


@endforeach
</div>
<div class="espacol"></div>

      <!-- Excluir Modal-->
    <div class="modal fade" id="excluirModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo excluir?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                  </div>
                  <div class="modal-body">Clique em "Excluir" se você tem certeza que deseja excluir este usuário.</div>
                  <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                      <form action="{{ route('users.destroy', ['usuario' => $u->id]) }}" method="POST">
                              @csrf
                              @method('delete')
                              <input type="submit"class="btn btn-danger" value="Excluir">
                         </form>
                    
                  </div>
              </div>
          </div>
      </div>    

@endsection