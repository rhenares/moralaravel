<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talle extends Model
{
    protected $fillable = [ 'talle'];
    public function colores ()
    {
      return $this->belongsToMany('App\Color','color_talle','talle_id','color_id');
    }
}
