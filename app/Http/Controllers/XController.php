<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Paper;

class XController extends Controller
{
  public function show(){
    $paper = Paper::all();
    return view('components.show', ['arr'=>$paper,'titel'=>'Это тайтл','content'=>'тут будет контент', 'name'=>'alex']);
  }
}
