<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rain extends Model
{
  protected $fillable = ['location_id', 'rainfall'];
  protected $table = 'rain';

  public function Location(){
    return $this->belongsTo('App\Location');
  }
}
