<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Product extends Model
{

     // Se adapta nuestro fillable para que podamos guardar el path en nuestra tabla:
     protected $fillable = ['name','image', 'active', 'cost', 'profit_margin', 'category_id','stock', 'color', 'talle', 'fotopath'];

     // le agregamos al modelo Product una función que nos permita saber el
      // precio total de un producto (cost + profit_margin)
     // {
     //El profit_margin es un porcentaje de cost que se agrega al costo base para generar el precio final.

      public function getPrice() {
        return $this->cost + ($this->cost * $this->profit_margin / 100);
      }

      // public function category() {
      //     return $this->belongsTo('\App\Category', 'category_id', 'id');
      // }

      // public function properties() {
      //     return $this->belongsToMany('\App\Property', 'product_property', 'product_id', 'property_id');
      // }

  }
