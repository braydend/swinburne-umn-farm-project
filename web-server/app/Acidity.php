<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acidity extends Model
{
    protected $fillable = ['location_id', 'acidity'];
    protected $table = 'acidity';

    public function Location(){
      return $this->belongsTo('App\Location');
    }
}
