@extends('layouts.app')

@section('title', 'Registro de lugares')

@section('body-class', 'profile-page sidebar-collapse')


@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('/img/basilica.jpg')">
</div>
<div class="main main-raised">
    <div class="container">

      <div class="section">
        <h2 class="title text-center">Registrar nuevo lugar</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
        @endif

        <form method="post" action="{{ url('/admin/products')}}">
          {{ csrf_field() }}

          <div class="row">
            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Nombre del lugar</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
              </div>
            </div>

            <div class="col-sm-6">
              <div class="form-group label-floating">
                <label class="control-label">Precio del lugar</label>
                <input type="number" class="form-control" name="price" value="{{ old('price') }}">
              </div>
            </div>
          </div>

            
              <div class="form-group label-floating">
                <label class="control-label">Descripción corta</label>
                <input type="text" class="form-control" name="description" value="{{ old('description') }}" >
              </div>
            



            <textarea class="form-control" placeholder="Descripción completa del lugar" rows="5" name="long_description">{{ old('long_description') }}</textarea>

            <button class="btn btn-primary">Registrar Producto</button>
            
        </form>
      </div>

    </div>
</div>
@include('includes.footer')
@endsection
