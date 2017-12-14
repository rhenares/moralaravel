@extends('plantilla')
@section('content')

  <!DOCTYPE html>
  <html>
      <head>
          <meta charset="utf-8">
          <title>{{$products->name}}</title>
      </head>
      <body>

          <h1>{{$products->name}}</h1>
          {{-- <img src="{{ asset('storage/' . $productS->fotopath) }}" alt=""> --}}
          <form action="/products/{{$products->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
            </form>

        <html lang="en">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/shop-item.css" rel="stylesheet">
      </head>
      <body>

        <!-- Page Content -->
        <div class="container">
          <div class="row">
            <div class="col-lg-3">
              <h1 class="my-4">Tienda Mora Maternity</h1>
              <div class="list-group">
                <a href="#" class="list-group-item active">Maternity</a>
                <a href="#" class="list-group-item">Post Parto</a>
                <a href="#" class="list-group-item">Lactancia</a>
              </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
              <div class="card mt-4">
                <img class="card-img-top img-fluid" src="/storage/{{$products->fotoPath}}" alt="">
                <div class="card-body">
                  <h3 class="card-title">{{$products->name}}</h3>
                  <h4>${{$products->getPrice()}}</h4>

                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                     Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                     Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.. </p>

                  <div class="filter-container">
                  <h4>Talle</h4>
                  <select name="talle" class="size-filter p-half-all-xs" onclick="LS.urlAddParam('Talle', '85');">
                     @foreach ($talles as $key => $talle)
                    <option value="{{$talle->id}}">{{$talle->talle}}</option>
                    @endforeach
                  </select>
                </div>

                  <div class="filter-container">
                  <h4>Color</h4>
                 <select name="Color" class="other-filter p-half-all-xs" onclick="LS.urlAddParam('Color Primario', 'Blanco');">
                  @foreach ($colors as $color)
                    <option value="{{$color->id}}">{{$color->color}}</option>
                  @endforeach
                 </select>
                </div>
              </div>
            </div>
              <!-- /.card -->

              <div class="card card-outline-secondary my-4">
                <div class="card-header">

                </div>

              </div>
              <!-- /.card -->

            </div>
            <!-- /.col-lg-9 -->

          </div>
        {{-- </ul>
          <img src="{{ asset('storage/' . $product->fotopath) }}" alt="">
          <a href="/editarProducts/{{$products->id}}">
            <button type="button" name="button">Editar</button>
          </a>
          <a href="/eliminarProducts/{{$products->id}}">
            <button type="button" name="button">Eliminar</button>
          </a> --}}
        </div>
        <!-- /.container -->

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


      </body>

    </html>

@endsection
