@extends('layouts.app')

@section('title', 'TURISMO')

@section('body-class', 'landing-page sidebar-collapse')

@section ('styles')
    <style>
       .team .row .col-md-4{
        margin-bottom: 5em;
       }
       .row {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display:         flex;
        flex-wrap: wrap;
       }
       .row > [class*='col-']{
        display: flex;
        flex-direction:column;
       }
  </style>
@endsection

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('../img/basilica.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">Tu viaje empieza con nosotros</h1>
          <h4>Selecciona tus destinos favoritos, escoge tus rutas, conoce y aventurate, nosotros te guiamos.</h4>
          <br>
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> video promocional
          </a>
        </div>
      </div> 
    </div>
</div>
<div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Sobre nosotros</h2>
            <h5 class="description">Mision y visión</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Comunicate con nosotros</h4>
                <p>Escribenos y contestaremos a todas tus dudas, nosotros te acompañamos durante toda tu experiencia</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Seguridad</h4>
                <p>Toda transacción en línea sera de manera segura. Si no confias en pagos en linea puedes pagar de manera física cuando tu experiencia comience</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Personaliza tu cuenta</h4>
                <p>Te ofrecemos una experiencia unica y personalizada sobre tus gustos y afinidades dentro del país.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section text-center">
        <h2 class="title">Lugares disponibles</h2>
        <div class="team">
          <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title"><a href="{{ url('/products/'.$product->id) }}"> {{ $product->name }}</a>
                    <br>
                    <small class="card-description text-muted">{{ $product->category->name }}</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">{{ $product->description }}
                      <hr>
                      <a href="#">links</a> Visite el lugar mas a fondo.</p>
                  </div>
                  <div class="card-footer justify-content-center">
                   
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="text-center">
            {{ $products->links()}}
          </div>
        </div>
      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">Comunicate con nosotros</h2>
            <h4 class="text-center description">Envia tus comentarios o tus quejas </h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nombre</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Email</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Tu Mensaje</label>
                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                   Enviar Mensaje
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@include('includes.footer')
@endsection
