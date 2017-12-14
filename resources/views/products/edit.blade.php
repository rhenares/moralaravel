@extends('plantilla')
@section('content')

<html>
<head>
    <meta charset="utf-8">
    <title>Editar productos</title>
    <link rel="stylesheet" href="/css/app.css">
 </head>
   <body>
     <div class="container">
        <h1>Editando: {{$products->name}}</h1>
            <form class="col-md-5" action="/productos/{{$products->id}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('patch') }}
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{$products->name}}" class="form-control">
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
                <input type="text" name="cost" id="cost" value="{{$products->cost}}" class="form-control">
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
                <input type="text" name="profit_margin" id="profit_margin" value="{{$products->profit_margin}}" class="form-control">
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
                    <label for="stock">stock disponible</label>
                    <input type="text" name="stock" id="stock" value="{{$products->stock}}" class="form-control">
                    @if ($errors->has('stock'))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->get('stock') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </div>
                    <div class="form-group">
                        <label for="category_id">Category-id</label>
                        <input type="text" name="category_id" id="category_id" value="{{$products->category_id}}" class="form-control">
                        @if ($errors->has('category_id'))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->get('category_id') as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                              </div>
                          @endif
                        </div>
                                <div class="form-group">
                                    <label for="color">color</label>
                                    <input type="text" name="color" id="color" value="{{$products->color}}" class="form-control">
                                    @if ($errors->has('color'))
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->get('color') as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="talle">Talle</label>
                                        <input type="text" name="talle" id="talle" value="{{$products->talle}}" class="form-control">
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
                                     <label for="fotoPath">Imagen</label>
                                     <input type="file" name="fotoPath" id="fotoPath"  class="form-control">
                                     @if ($errors->has('fotoPath'))
                                         <div class="alert alert-danger">
                                             <ul>
                                                 @foreach ($errors->get('fotoPath') as $error)
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
            <form action="/productos/{{$products->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                 <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
      </div>
    </body>
  </html>
@endsection
