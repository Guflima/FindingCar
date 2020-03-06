@extends('layouts/admin.dashboard')

@section('titulo', 'SIA Eventos - Novo Usuário')

@section('mainContent')
<div class="container bootstrap snippet">
    <div class="row">
        
    	<div class="col-sm-9">
              
                   <!-- Cadastrar -->
                   <div class="card shadow">
                        <div class="card-header py-3">
                                <h3 class="register-heading">Cadastrar usuário</h3>
                        </div>
                        <div class="card-body">
                           
                          
                                    <div class="tab-content" id="myTabContent">
                                            <form action="{{route('users.update', ['usuario' => $usuario->id])}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="row register-form">
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nome Completo *</label>
                                                        <input type="text" name="nomeCompleto" value="{{$usuario->nomeCompleto}}" class="form-control" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>CEP *</label>
                                                        <input type="text" class="form-control" name="cep" 
                                                        value="{{$usuario->cep}}"
                                                        required 
                                                         />
                                                    </div>
                                                    <div class="form-group">
                                                            <label>Cidade *</label>
                                                            <input type="text" class="form-control" disabled />
                                                    </div>
                                                    <div class="form-group">
                                                            <label for="">Rua *</label>
                                                            <input type="text" disabled class="form-control" />
                                                        </div>
                                                        <div class="form-group">
                                                                <label>Telefone (celular) *</label>
                                                                <input type="text" 
                                                                value="{{$usuario->telefone}}"
                                                                class="form-control" name="telefone" />
                                                        </div>
                                                        <div class="form-group">
                                                                <label>Acesso ao sistema*</label>
                                                                @if ($usuario->ativo  == "1")
                                                                <select class="custom-select" name="ativo" required >
                                                                    <option  class="form-control" value="1" disabled selected>Permitido</option>
                                                                    <option value="0">Negar</option>
                                                                </select>
                                                        </div>
                                                                @else
                                                                <select class="custom-select" name="ativo" required >
                                                                    <option  class="form-control" value="0" disabled selected>Negado</option>
                                                                    <option value="1">Permitir</option>
                                                                </select>
                                                            </div>
                                                            @endif
                                                    <input type="hidden" value="1">
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label for="">Email *</label>
                                                                <input type="email"
                                                                value="{{$usuario->email}}"
                                                                class="form-control"  name="email" />
                                                        </div>
                                                    
                                                    <div class="form-group">
                                                            <label for="dataDeTermino">CPF *</label>
                                                           
                                                            <input type="text"  value="{{$usuario->cpf}}" class="form-control" name="cpf" />
                                                    </div>
                                                    <div class="form-group">
                                                                <label>Bairro *</label>
                                                                <input type="text" class="form-control"  disabled />
                                                    </div>
                                                    <div class="form-group">
                                                            <label>Número do complemento *</label>
                                                          
                                                            <input type="text" value="{{$usuario->complemento_num}}"name="complemento_num" class="form-control"  required />
                                                </div>
                                                    <div class="form-group">
                                                            <label class="my-1 mr-2">Perfil de Acesso</label>
                                                            @if ($usuario->perfil  == "9")
                                                                <select class="custom-select" name="perfil" required >
                                                                    <option  class="form-control" value="9" disabled selected>Desenvolvedor</option>
                        
                                                                    <option value="7">Gerente</option>
                                                                    <option value="5">Administrador</option>
                                                                    <option value="3">Usuário</option>
                                                                </select>

                                                            @elseif($usuario->perfil == '7')
                                                                <select class="custom-select" name="perfil" required >
                                                                    <option  class="form-control" value="7" disabled selected>Gerente</option>
                        
                                                                    <option value="5">Administrador</option>
                                                                    <option value="3">Usuário</option>
                                                                </select>

                                                                @elseif($usuario->perfil == '5')
                                                                <select class="custom-select" name="perfil" required >
                                                                    <option  class="form-control" value="5" disabled selected>Administrador</option>
                        
                                                                    <option value="7">Gerente</option>
                                                                    <option value="3">Usuário</option>
                                                                </select>

                                                                @else

                                                                <select class="custom-select" name="perfil" required >
                                                                        <option  class="form-control" value="3" disabled selected>Usuário</option>
                            
                                                                        <option value="7">Gerente</option>
                                                                        <option value="5">Administrador</option>
                                                                    </select>

                                                            @endif
                                                            
                                                    </div>
                                                 

                                                    <div class="form-group">
                                                        <div class="espaco"></div>
                                                        <div class="espaco"></div>
                                                            <a href="{{ route('users.index') }}">
                                                                    Cancelar Edição
                                                                </a>
            
                                                                @submitCreate(['value'=>' Salvar Alterações'])
                                                                @endsubmitCreate
                                                </div>
                                                  
                                                    
                                                </div>
                                            </form>
                                            </div>
                                    </div>
                         
                            </div>
                        </div>
                    </div><!--/col-9-->
                    <div class="col-sm-3"><!--left col-->
              
        
                        <div class="text-center">
                          <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                          <h6>O usuário pode carregar uma foto depois</h6>
                          <input type="file" class="text-center center-block file-upload">
                        </div></hr><br>
                  
                                 
                            
                            <ul class="list-group">
                              <li class="list-group-item text-muted">Atividade <i class="fa fa-dashboard fa-1x"></i></li>
                              <li class="list-group-item text-right"><span class="pull-left"><strong>Usuários cadastrados</strong></span> 125</li>
                              <li class="list-group-item text-right"><span class="pull-left"><strong>Usuários desativados</strong></span> 13</li>
                              <li class="list-group-item text-right"><span class="pull-left"><strong>Admins cadastrados</strong></span> 3</li>
                            </ul> 
                            
                          </div><!--/col-3-->
                </div>
             </div>   
                    <div class="espaco"></div>
                    <div class="espaco"></div>
@endsection