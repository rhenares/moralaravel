@extends('plantilla')
@section('content')
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="/css/app.css">

        <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse"
          data-target=".navbar-ex1-collapse">
          <div class="container">
            <div class="navbar-header">
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
              <span class="icon-bar"> </span>
              </button>
              <a class="navbar-brand" href="https://www.tiendamora.com.ar/" target="_blank">
              <img alt="Tienda Mora" src="img/logochico.jpg">
              </a>
              </div>
              <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span>  </button>
              <ul class="dropdown-menu">
                <li><a href="#">embarazo</a></li>
                <li><a href="#">lactancia</a></li>
                <li><a href="#">post parto</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
            </div>
          </div>
         </nav>
     </head>

      {{-- <ul>
         @foreach ($products as $product)
             <li><a href="/products/{{$product->id}}">{{$product->name}}</a></li>
         @endforeach
     </ul> --}}

  <body>
 <!-- Page Content -->
 <div class="container">
   <div class="row">
     <div class="col-lg-3">
       <h1 class="my-4">Maternity Shop</h1>
       <div class="list-group">
         <a href="#" class="list-group-item">Embarazo</a>
         <a href="#" class="list-group-item">Post Parto </a>
         <a href="#" class="list-group-item">Lactancia</a>
       </div>
     </div>
     <!-- /.col-lg-3 -->

     <div class="col-lg-9">
       <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
         <ol class="carousel-indicators">
           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
           <div class="carousel-item active">
             <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
           </div>
           <div class="carousel-item">
             <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
           </div>
           <div class="carousel-item">
             <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>

       <div class="row">

         @foreach ($products as $product)
             <div class="col-lg-4 col-md-6 mb-4">
               <div class="card h-100">
                 <a href="#"><img class="card-img-top" src="/storage/{{$product->fotoPath}}" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                     <a href="/producto/{{$product->id}}">{{$product->name}} </a>
                    </h4>
                   <h5>${{$product->getPrice()}}</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                 </div>
                <div class="card-footer">
               <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
        @endforeach
       </div>
       <!-- /.row -->
     </div>
     <!-- /.col-lg-9 -->
   </div>
   <!-- /.row -->
 </div>
 <!-- /.container -->
 <!-- Content Row -->
 </body>
</html>
@endsection
