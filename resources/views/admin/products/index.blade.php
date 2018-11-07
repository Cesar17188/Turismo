@extends('layouts.app')

@section('title', 'Listado de productos')

@section('body-class', 'product-page sidebar-collapse')


@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('../img/basilica.jpg')">
</div>
<div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Lista de lugares</h2>
        <div class="team">
          <div class="row">
           <table class="table">
                  <thead>
                      <tr>
                          <th class="text-center">#</th>
                          <th>Nombre</th>
                          <th class="col-md-4">Descripción</th>
                          <th>Categoría</th>
                          <th class="text-right">Precio</th>
                          <th class="text-right">Opciones</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                      <tr>
                          <td class="text-center">{{ $product->id }}</td>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->description }}</td>
                          <td>{{ $product->category->name}} </td>
                          <td class="text-right">&euro; {{ $product->price }}</td>
                          <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">
                                  <i class="fa fa-info"></i>
                              </button>
                              <button type="button" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">
                                  <i class="fa fa-edit"></i>
                              </button>                              <button type="button" rel="tooltip" title="Eliminar producto" class="btn btn-danger btn-simple btn-xs">
                                  <i class="fa fa-times"></i>
                              </button>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>
        </div>
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
