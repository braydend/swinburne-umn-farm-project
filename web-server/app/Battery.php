<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Battery extends Model
{
  protected $fillable = ['location_id', 'charge'];
  protected $table = 'battery';

  public function Location(){
    return $this->belongsTo('App\Location');
  }
}
