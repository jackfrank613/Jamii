<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use maxh\Nominatim\Nominatim;
class ExampleController extends Controller
{
    //
    public function getInit(){
      
        $url = "http://nominatim.openstreetmap.org/";
        $nominatim = new Nominatim($url);

        $search = $nominatim->newSearch()
            ->country('France')
             ->city('Paray-Vieille-Poste')
            // ->postalCode('91550')
            ->polygon('geojson')    //or 'kml', 'svg' and 'text'
            ->addressDetails();
        $result = $nominatim->find($search);
        print_r($result);exit;

       

    }
}
