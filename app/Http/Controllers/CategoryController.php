<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Collection;
use App\Category;
use App\SubCategory;

class CategoryController extends BaseController
{
   
    public function initCategory()
    {
        $data = [];
        $result=Category::get();
        $data['categories'] = $result->toArray();
      //  print_r($data);exit();
        $subcategory = [];
        foreach($result as $category)
        {
            $result1=SubCategory::where("id", "=", $category['id'])->get()->toArray();
            $subcategory[$category['id']] = $result1;

        }
        $data['subcategories'] = $subcategory;
        // print_r($data);exit();     

        return view('advertisepage')->with('data', $data);

    }

}