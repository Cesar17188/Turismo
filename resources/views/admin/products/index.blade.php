@extends('layouts.app')

@section('title', 'Listado de lugares')

@section('body-class', 'profile-page sidebar-collapse') 


@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('/img/basilica.jpg')">
</div>
<div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <h2 class="title">Lista de lugares</h2>
        <div class="team">
          <a href="{{ url('/admin/products/create') }}" class="btn btn-primary btn-round">Nuevo Lugar</a>
          <div class="row">
            <table class="table">
                  <thead>
                      <tr>
                          <th class="text-center">#</th>
                          <th class="col-md-2 text-center">Nombre</th>
                          <th class="col-md-5 text-center">Descripción</th>
                          <th class="text-center">Categoría</th>
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
                          <td>{{ $product->category ? $product->category->name : 'General'}} </td>
                          <td class="text-right">&euro; {{ $product->price }}</td>
                          <td class="td-actions text-right">
                               <form method="post" action="{{ url('/admin/products/'.$product->id)}}">
                                {{ csrf_field() }}
                                <a type="button" rel="tooltip" title="Ver lugar" class="btn btn-info btn-simple btn-xs">
                                  <i class="fa fa-info"></i>
                              </a>
                              <a href="{{ url('/admin/products/'.$product->id.'/edit')}}" rel="tooltip" title="Editar lugar" class="btn btn-success btn-simple btn-xs">
                                  <i class="fa fa-edit"></i>
                              </a>
                                {{ method_field('DELETE')}}

                                <a href="{{ url('/admin/products/'.$product->id.'/images')}}" rel="tooltip" title="Imagenes del lugar" class="btn btn-warning btn-simple btn-xs">
                                  <i class="fa fa-image"></i>
                              </a>
                                <button type="submit" rel="tooltip" title="Eliminar lugar" class="btn btn-danger btn-simple btn-xs">
                                  <i class="fa fa-times"></i>
                                </button>
                              </form>                              
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
              {{ $products->links() }}
             </div>
        </div>
      </div>
    </div>
</div>
@include('includes.footer')
@endsection
