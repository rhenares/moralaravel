<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Color;
use App\Talle;

class ProductoController extends Controller
{
         public function index() {
           $products = \App\Product::all();
           $variables = [
           "products" => $products,
            ];
            return view('products.index', $variables);
          }

          public function show($id) {
            //$propiedades=\App\Property::where("id_producto",$id)->get();
            //dd($propiedad);
            /*

            foreach ($propiedades as $propiedad) {
              dd($propiedad->getColores()->get());
            }
            $colores = $propiedad->getColores();
            dd($colores);
              $talles = $propiedad->getTalles();
              */

            $colores = \App\Color::all();
            $talles = \App\Talle::all();
            $products = \App\Product::find($id);



            $variables = [
               "colors" => $colores,
               "talles"=>$talles,
               "products" => $products,
            ];


            return view('products.show', $variables);
          }

          // Genera un array asociativo (clave => valor), e
          // inserta un nuevo registro en la base de datos.

          public function create(){
              $products = \App\Product::all();
              $talles = \App\Talle::all();
              $colors = \App\Color::all();
              $variables = [
              "products" => $products,
              "talles" => $talles,
              "colors" => $colors,
              ];

              return view('products.create', $variables);
          }

          public function store(Request $request) {

                $reglas = [
                  "name" => "required",
                  "cost" => "required|numeric",
                  "profit_margin" => "required|numeric",
                  "category_id" => "required|numeric|between:1,3",
                  "fotoPath" => "required",
                  "stock" => "required|numeric",
                  "talle" => "required",
                  "color" => "required",
                ];

                $messages = [
                  "required" => "El :attribute es requerido!",
                  "unique" => "El :attribute tiene que ser único!",
                  "numeric" => "El :attribute tiene que ser numérico!",
                  "between" => "El :attribute tiene que estar entre :min y :max.",
                ];

                $request->validate($reglas, $messages);

                $extensionImagen = $request->file('fotoPath')->getClientOriginalExtension();
                $fotoPath = $request->file('fotoPath')->storeAs('products', uniqid() . "." . $extensionImagen, 'public');

                //dd($request->input('color'));

                $product = \App\Product::create ([
                  'name' => $request->input('name'),
                  'cost' => $request->input('cost'),
                  'profit_margin' => $request->input('profit_margin'),
                  'category_id ' =>$request->input('category_id'),
                  'stock' => $request->input('stock'),
                  'fotoPath' => $fotoPath
                ]);

                $product->save();
              }

          //       // $property = \App\Property::create ([
          //       //   'id_producto' => $product->id,
          //       //   'id_color' => $request->input('color'),
          //       //   'id_talle' => $request->input('talle'),
          //       // ]);
          //       // $property->save();
          //
          //
          //       // return redirect('/producto');
          //
          // }

           public function edit($id) {
               $products = \App\Product::find($id);
               $variables = [
               'products' => $products,
               ];

               return view('products.edit', $variables);
          }

                public function update(Request $request, $id) {
                  $fotoPath = null;

                  if ($request->file('fotoPath') !== null) {
                    $extensionImagen = $request->file('fotoPath')->getClientOriginalExtension();
                    $fotoPath = $request->file('fotoPath')->storeAs('products', uniqid() . "." . $extensionImagen, 'public');
                  }

                  $products = \App\Product::find($id);

                  if(!$fotoPath){
                    $fotoPath = $products->fotoPath;
                  }
                  $products->name = $request->input('name');
                  $products->cost = $request->input('cost');
                  $products->profit_margin = $request->input('profit_margin');
                  $products->category_id = $request->input('category_id');
                  $products->stock = $request->input('stock');


                  $products->fotoPath = $fotoPath;
                  $products->save();

                    return redirect('/producto/'.$id);

              }

               public function destroy($id) {
                 $products = \App\Product::find($id);
                 $products->delete();

                 return redirect('/producto');
               }






}
