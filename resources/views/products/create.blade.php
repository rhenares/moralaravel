@extends('plantilla')
@section('content')

  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
      <h1>Agregar Productos</h1>
      @if (isset($errors))
          {{$errors}}
      @endif
      <form class="col-md-5" action="/producto/agregar" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
              <label for="name">Nombre</label>
              <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
              @if ($errors->has('name'))
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->get('name') as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          </div>
          <div class="form-group">
              <label for="cost">Costo</label>
              <input type="text" name="cost" id="cost" value="{{old('cost')}}" class="form-control">
              @if ($errors->has('cost'))
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->get('cost') as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
          </div>
          <div class="form-group">
              <label for="profit_margin">Margen de Ganancia</label>
              <input type="text" name="profit_margin" id="profit_margin" value="{{old('profit_margin')}}" class="form-control">
              @if ($errors->has('profit_margin'))
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->get('profit_margin') as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
        </div>
          <div class="form-group">
              <label for="fotoPath">Imagen</label>
              <input type="file" name="fotoPath" id="fotoPath" class="form-control">
              @if ($errors->has('fotoPath'))
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->get('fotoPath') as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <br>
              <div class="form-group">
                  <label for="stock">stock disponible</label>
                  <input type="text" name="stock" id="stock" value="{{old('stock')}}" class="form-control">
                  @if ($errors->has('stock'))
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->get('stock') as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  <div class="form-group">
                      <label for="category_id">Category-id</label>
                      <input type="text" name="category_id" id="category_id" value="{{old('category_id')}}" class="form-control">
                      @if ($errors->has('category_id'))
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->get('category_id') as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                            </div>
                        @endif
                              <div class="form-group">
                                  <label for="color">color</label>
                                  <select name="color" class="other-filter p-half-all-xs" onclick="LS.urlAddParam('Color Primario', 'Blanco');">
                                   @foreach ($colors as $key => $color)
                                     <option value="{{$color->id}}">{{$color->color}}</option>
                                   @endforeach
                                  </select>
                                  @if ($errors->has('color'))
                                      <div class="alert alert-danger">
                                          <ul>
                                              @foreach ($errors->get('color') as $error)
                                                  <li>{{ $error }}</li>
                                              @endforeach
                                          </ul>
                                      </div>
                                  @endif
                                  <div class="form-group">
                                      <label for="talle">Talle</label>

                                       <select name="talle" class="size-filter p-half-all-xs" onclick="LS.urlAddParam('Talle', '85');">
                                          @foreach ($talles as $key => $talle)
                                         <option value="{{$talle->id}}">{{$talle->talle}}</option>
                                         @endforeach
                                       </select>
                                         @if ($errors->has('talle'))
                                           <div class="alert alert-danger">
                                              <ul>
                                                  @foreach ($errors->get('talle') as $error)
                                                      <li>{{ $error }}</li>
                                                  @endforeach
                                              </ul>
                                          </div>
                                      @endif
                               </div>
          <div class="form-group">
              <button type="submit" name="button" class="btn btn-primary">Enviar</button>
          </div>
      </form>
  </div>
</body>
</html>
@endsection
