<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Country;
use App\Models\City;


class CountryController extends Controller
{
  public function result(Request $request)
  {
    $title = $request->input('title');
    $slug = $request->input('slug');

    return view('post.result', ['title'=>$title, 'slug'=>$slug]);

  }
  public function form(){

    return view('post.form');
  }

  public function show()
  
  {
    $countrys = Country::where('id', '=', '1')->get();
    $arr = [];
    foreach ($countrys as $country) {      
     foreach ($country->city as $city) {
      $arr[] = $city->cityname;
     }
    }
    
    return view('components.country.country', ['title'=>'Страны и города', 'country'=> $arr]);
    
  }
}
