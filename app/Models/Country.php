<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Country extends Model
{  
  public function city()
  {
    return $this->hasMany(City::class, 'countries_id', 'id');
  }
  
}
