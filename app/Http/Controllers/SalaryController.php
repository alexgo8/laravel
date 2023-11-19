<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Paper;

class SalaryController extends Controller
{
    public function show(){
      $papers = DB::table('papers')->get();
      return view('components.salary.salary', ['papers'=> $papers,'name'=>'alex', 'age'=>'35', 'salary'=>'150000']);
    }
}
