<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
   public function setCookie($key,$value)
   {
       $minutes=120;
       Cookie::queue(Cookie::make('$key', '$value', $minutes));
   }

   public function getCookie()
   {
        $value = Cookie::get('$key');
        return $value;
   }
}
