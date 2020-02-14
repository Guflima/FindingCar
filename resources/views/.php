@extends('layouts/estruturaPaginaHomeCliente')

@section('conteudo')


  <!-- Masthead -->
 <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Bem vindo ao Finding Car!</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Encontre seu veículo">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-danger">Vamos lá!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Já sabe oque procura? ache o seu carro agora!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-danger">Vamos lá!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item text-danger">
              <a href="#">Sobre</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contato</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Termos de Uso</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Politica de privacidade</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; 2020. Todos os direitos reservados.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-facebook text-danger fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square text-danger fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram  text-danger fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

@endsection

 