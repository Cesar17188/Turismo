@extends('layouts.app')

@section('title', 'Turismo | Cuenta')

@section('body-class', 'profile-page sidebar-collapse')


@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('../img/ciudad.jpg')">
</div>
<div class="main main-raised">
    <div class="container">

      <div class="section">
        <h2 class="title text-center">Cuenta</h2>

        @if (session('notification'))
           <div class="alert alert-success" role="alert">
                  {{ session('notification') }}
           </div>
        @endif

        <ul class="nav nav-pills nav-pills-icons" role="tablist">
            <!--
                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
            -->
            <li class="nav-item">
                <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
                    <i class="material-icons">dashboard</i>
                    Carrito de compras
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                    <i class="material-icons">list</i>
                    Tours Contratados
                </a>
            </li>
        </ul>
        <hr>
        <p>Los lugares que seleccionaste son {{ auth()->user()->cart->details->count() }}</p>

          <table class="table">
                  <thead>
                      <tr>
                          <th class="text-center">#</th>
                          <th class="text-center">Nombre</th>
                          <th>Precio</th>
                          <th>Opciones</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach(auth()->user()->cart->details as $detail)
                      <tr>
                          <td class="text-center">
                            <img src = "{{ $detail->product->featured_image_url }}" height="50">
                          </td>
                          <td class="text-center">
                            <a href="{{ url ('/products/'.$detail->product->id)}}" target="_blank"> {{ $detail->product->name }}
                          </td>
                          <td class="text-right">&#36; {{ $detail->product->price }}</td>
                          <td class="td-actions">
                               <form method="post" action="{{ url('/cart')}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE')}}
                                <input type="hidden" name="cart_detail_id" value="{{ $detail->id }}">

                                <a href="{{ url('/products/'.$detail->product->id)}}" target="_blank" rel="tooltip" title="Ver lugar" class="btn btn-info btn-simple btn-xs">
                                  <i class="fa fa-info"></i>
                              </a>
                                          

                                
                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                  <i class="fa fa-times"></i>
                                </button>
                              </form>                              
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
          </table>

          <div class="text-center">
            <form method="post" action="{{ url('/order')}}">
                {{ csrf_field() }}
                
              <button class="btn btn-primary btn-round">
                <i class="material-icons">done</i> Realizar pedido
              </button>
            </form>
          </div>
      </div>

    </div>
</div>
@include('includes.footer')
@endsection


