<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
  protected $fillable = ['name', 'description'];
  protected $table = 'locations';

  public function Acidity(){
    return $this->hasMany('App\Acidity');
  }

  public function Battery(){
    return $this->hasMany('App\Battery');
  }

  public function Humidity(){
    return $this->hasMany('App\Humidity');
  }

  public function Moisture(){
    return $this->hasMany('App\Moisture');
  }

  public function Rain(){
    return $this->hasMany('App\Rain');
  }

  public function Temperature(){
    return $this->hasMany('App\Temperature');
  }
}
