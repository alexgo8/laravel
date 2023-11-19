<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function show($name){
      $arr = [
        'alex'=>'krasnodar(st stavropolskiy)',
        'igor'=>'krasnodar(st turgenev)',
        'vlada'=>'saratov',
      ];
      if (isset($arr[$name])) {
        return $arr[$name];
      } else {
        return 'эй, парниша, такого имени не существут в нашем массиве';
      }
      
    }
}
