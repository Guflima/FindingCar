@extends('layouts/admin.dashboard')

@section('titulo', 'SIA Eventos - Novo Usuário')

@section('mainContent')
@if (session('success'))
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Feito!</h4>
    <p>{{ session('success') }}</p>
  </div>
@endif
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
                                            <form action="{{route('users.store')}}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            <div class="row register-form">

                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label for="name" >{{ __('Name') }}</label>

                                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="last_name" >{{ __('Sobrenome') }}</label>
                                                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                                            @error('last_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email" >{{ __('E-Mail Address') }}</label>

                                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="role_id" >{{ __('Tipo de Usuário') }}</label>



                                                            <select name="role_id" id="role_id">
                                                                <option value="5">Admin</option>
                                                                <option value="3">User</option>
                                                            </select>

                                                            @error('role_id')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>

                                            </div>
                                    </div>

                            </div>
                        </div>
                    </div><!--/col-9-->
                    <div class="col-sm-3"><!--left col-->


                        <div class="text-center">
                          <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                          <h6>O usuário pode carregar uma foto depois</h6>
                          <input type="file" name="image" class="text-center center-block file-upload">
                        </div></hr><br>

                    </form>

                            <ul class="list-group">
                              <li class="list-group-item text-muted">Atividade <i class="fa fa-dashboard fa-1x"></i></li>
                              <li class="list-group-item text-right"><span class="pull-left"><strong>Usuários cadastrados</strong></span> 125</li>
                              <li class="list-group-item text-right"><span class="pull-left"><strong>Usuários desativados</strong></span> 13</li>
                              <li class="list-group-item text-right"><span class="pull-left"><strong>Admins cadastrados</strong></span> 3</li>
                            </ul>

                          </div><!--/col-3-->
                </div>
             </div>
            </div>
                    <div class="espaco"></div>
                    <div class="espaco"></div>
@endsection


