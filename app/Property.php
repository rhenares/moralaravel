<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
  protected $table = "color_talle";
  protected $fillable = ['id_producto','id_color', 'id_talle'];

  public function getColores() {
      return $this->belongsToMany('\App\Color', 'colors', 'id_color', 'id');
      //this->belongsToMany('App\Talle',"talles", 'id_color','id_talle');
  }

  public function getTalles() {
      return $this->belongsToMany('\App\Talle', 'talles', 'id_talle', 'id');
      //return $this->belongsToMany('\App\Product', 'product_property', 'property_id', 'product_id');
      //this->belongsToMany('App\Talle',"talles", 'id_color','id_talle');
  }


}
