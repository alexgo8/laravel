<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;





class ValeraController extends Controller
{
    public function show() {
      $papers = DB::table('papers')->where('id', '=', 3)->get();
      
      return view('post.valera', ['id1'=> $papers, 'id2'=>'рыбу']);
    }

    
  }

  
