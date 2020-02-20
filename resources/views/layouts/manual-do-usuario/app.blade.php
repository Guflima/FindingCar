



<!DOCTYPE html>
<!--
    Pega a localização da aplicação
    presente em config/app
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <!--
            O título da página
            é passado para a página
            que herdará este
            layout
        -->
        <title>@yield('titulo')</title>

        <!--
            Configura collate de caracteres
            para UTF-8
        -->
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

        <!--
            Ajusta a escala inicial de zoom
            para 1 (sem zoom in e out)
        -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--
            Ativa compatibilidade com internet
            explorer edge
        -->
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--
            Importa css presente na pasta
            public/css
        -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">

        <!--
            Importa logo da aplicação presente
            na pasta public/imagens
        -->
        <link rel="shortcut icon" href="{{ asset('imagens/logo/siaLogo.png') }}">

        <!--
            Importa o bootstrap 4
            via CDN
        -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>

    <body id="pao">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <!--
                   Importa logo da aplicação
               -->
               <img src="{{ asset('imagens/logo/siaLogo.png') }}" alt="Imagem mostra logo do sistema em roxo e branco com ícones que lembram tecnologia"
               class="d-inline-block logo_nav_bar"/>
               <!--
                   Nome do sistema ao lado da logo
               -->
               @lang('layouts/estruturaDaPagina/conteudo.sia_eventos')
           </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="{{ request()->routeIs('manual.do.usuario') ? 'nav-item active' : 'nav-item' }}">
                <a class="nav-link" href="{{ route('manual.do.usuario') }}">Início do manual</a>
            </li>

            <li class="{{ request()->routeIs('como-editar-meu-perfil') ? 'nav-item dropdown active' : 'nav-item dropdown' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Meu Perfil
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" id="dropPersonalizado"
                href="{{ route('como-editar-meu-perfil') }}"
                style="{{ request()->routeIs('como-editar-meu-perfil') ? 'background-color: #343A40;
                color: #fff;' : '' }}"
                >Como editar meu perfil?</a>
                </div>
            </li>
            </ul>
          <!--
                    Início nav-bar direita
                -->

                <!--
                    Formulário de busca na página
                -->
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search"
                    placeholder="@lang('layouts/estruturaDaPagina/conteudo.pesquisar_algo')" aria-label="search"/>
                    <button class="btn btn-outline-success my-2 my-sm-0"
                    type="submit">@lang('layouts/estruturaDaPagina/conteudo.vai')</button>
                </form>

                <ul class="navbar-nav">
                    <!--
                        Início do item
                        de perfil do usuário
                    -->
                    <li class="nav-item dropdown no-arrow">

                        <a class="{{request()->routeIs('myprofile*') ? 'nav-link dropdown-toggle active' : 'nav-link dropdown-toggle'}}" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <!--
                                    Imagem do usuário a ser
                                    exibida
                                -->
                                @if(auth()->user()->image != null)
                                    <img class="img-profile rounded-circle"  src="{{ url('storage/images/users/'.auth()->user()->image) }}"
                                    style="width: 2.5em; height: 2.5em;">
                                @else
                                    <img class="img-profile rounded-circle"  src="https://www.auctus.com.br/wp-content/uploads/2017/09/sem-imagem-avatar.png"
                                    style="width: 2.5em; height: 2.5em;">
                                @endif


                                <!--
                                    Nome do usuário a ser
                                    exibido
                                -->
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                        </a>
                        <!--
                            Dropdown - Informações do usuário
                        -->
                        <div class="dropdown-menu dropdown-menu-right shadow  " aria-labelledby="userDropdown">


                            <a class="dropdown-item animate slideIn" style="{{ request()->routeIs('myprofile*') ? 'background-color: #343A40; color: #fff' : '' }}" href="{{ route('myprofile.index') }}" id="dropPersonalizado">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>@lang('layouts/estruturaDaPagina/conteudo.meu_perfil')
                            </a>

                            <a class="dropdown-item animate slideIn" href="#" id="dropPersonalizado">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>@lang('layouts/estruturaDaPagina/conteudo.configurações')
                            </a>

                            <a class="dropdown-item animate slideIn" href="#" id="dropPersonalizado">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>@lang('layouts/estruturaDaPagina/conteudo.logs_de_Atividade')
                            </a>

                            <a class="dropdown-item animate slideIn" style="{{ request()->routeIs('manual.do.usuario') ? 'background-color: #343A40; color: #fff' : '' }}" href="{{ route('manual.do.usuario') }}" id="dropPersonalizado">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>@lang('layouts/estruturaDaPagina/conteudo.como_usar')
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item animate slideIn" href="#" data-toggle="modal" data-target="#logoutModal" id="dropPersonalizado">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>@lang('layouts/estruturaDaPagina/conteudo.logout')
                            </a>

                        </div><!--Fim drop-down informações do usuário-->

                    </li><!--Fim informações do usuário -->

                </ul><!-- Fim nav-item direita-->

            </div><!--Fim do nav-bar mobile -->

        </nav><!--Fim do nav-bar fixo no topo da página-->


        <!--
            Nessa div será inserido
            todo o conteúdo da página
        -->
            <div class="container flex-center">
                @yield('conteudo')

            </div>

          <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>@lang('layouts/estruturaDaPagina/conteudo.desenvolvido_por')<a style="
                        text-decoration: none;" href="https://www.facebook.com/wellington.carneirobarbosa.3" target="_blank" > <strong>Evolue IT</strong></a></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->


        <!-- Logout Modal-->

        <!--
            Para chamar um novo modal basta
            configurar o id do modal e no
            botão que chamará o modal
            inserir = "data-toggle="modal" data-target="#id_do_modal""
        -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!--
                        Início header do modal
                    -->
                    <div class="modal-header">
                        <!--
                            Título do modal
                        -->
                        <h5 class="modal-title" id="exampleModalLabel">@lang('layouts/estruturaDaPagina/conteudo.deseja_mesmo_sair?')</h5>

                        <!--
                            Início botão fechar
                        -->
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button><!--Fim botão fechar-->

                    </div><!--Fim header do modal-->

                    <!--
                        Corpo do modal
                    -->
                    <div class="modal-body">@lang('layouts/estruturaDaPagina/conteudo.certeza')</div>

                    <!--
                        Opções no fim do modal
                    -->
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('layouts/estruturaDaPagina/conteudo.cancelar')</button>

                        <!--Envia a solicitação de Log Out-->
                        <form class="form-inline my-2 my-lg-0" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-primary my-2 my-sm-0"
                            type="submit">@lang('layouts/estruturaDaPagina/conteudo.logout')</button>
                        </form>

    </body><!--Fim do corpo da página-->
</html><!--Fim do documento-->


