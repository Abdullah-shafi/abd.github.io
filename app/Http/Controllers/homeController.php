<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\User;

class homeController extends Controller
{
    
     public function index(Request $req){
      
     	 return view('home.index');
      
     }

   

}