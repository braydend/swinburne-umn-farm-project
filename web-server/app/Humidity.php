<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Humidity extends Model
{
  protected $fillable = ['location_id', 'humidity'];
  protected $table = 'humidity';

  public function Location(){
    return $this->belongsTo('App\Location');
  }
}
