<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moisture extends Model
{
  protected $fillable = ['location_id', 'mositure'];
  protected $table = 'moisture';

  public function Location(){
    return $this->belongsTo('App\Location');
  }
}
