@extends('layouts.app')

@section('title', 'Registro de lugares')

@section('body-class', 'product-page sidebar-collapse')


@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('../img/basilica.jpg')">
</div>
<div class="main main-raised">
    <div class="container">

      <div class="section">
        <h2 class="title text-center">Editar lugar seleccionado</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
        @endif

        <form method="post" action="{{ url('/admin/products/'.$product->id.'/edit')}}">
          {{ csrf_field() }}

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Nombre del lugar</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $product->name) }}">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Precio del lugar</label>
                <input type="number" step="0.01" class="form-control" name="price" value="{{ old('price', $product->price }}">
              </div>
            </div>
          </div>

            
              <div class="form-group label-floating">
                <label class="control-label">Descripción corta</label>
                <input type="text" class="form-control" name="description" value="{{ old('description', $product->description) }}">
              </div>
            



            <textarea class="form-control" placeholder="Descripción completa del lugar" rows="5" name="long_description">{{ old ('long_description, '$product->long_description)}}</textarea>

            <button class="btn btn-primary">Guardar Cambios</button>
            <a href="{{url('/admin/products')}}" class="btn btn-default">Cancelar</a>
        </form>
      </div>

    </div>
</div>
<footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
</footer>
@endsection
