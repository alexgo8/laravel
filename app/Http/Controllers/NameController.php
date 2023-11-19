<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    public function show($name, $surname){
      return "Меня зовут $name $surname";
    }
}
