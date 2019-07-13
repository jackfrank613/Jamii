<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MarkModel;

class AddController extends Controller
{
    //
    public function addMarker(Request $request){

      
    }
    public function getResearch(){
           
        return view('researchpage');
    }

}
