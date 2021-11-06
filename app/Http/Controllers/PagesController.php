<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public  function index(){
        $fetch= new FetchController();
        $rates= $fetch->fetch();
      if($rates){
          return view('index',$rates);
      }
      else{
          return view('index');
      }

    }

    public  function refresh(){
        $fetch= new FetchController();
        $rates= $fetch->fetch();
        return $rates;
    }
}
