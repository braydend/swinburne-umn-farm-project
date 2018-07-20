<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
  protected $fillable = ['location_id', 'temperature'];
  protected $table = 'temperatures';

  public function Location(){
    return $this->belongsTo('App\Location');
  }
}
