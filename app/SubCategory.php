<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    //
    protected $table = 'admobsite_subcategory';
    protected $fillable = [
        'sub_id','id','s_name','option' ,
    ];

}