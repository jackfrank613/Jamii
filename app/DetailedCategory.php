<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailedCategory extends Model
{
    //
    protected $table = 'admobsite_detail';
    protected $fillable = [
      'id', 'sub_id','adName','adType','subject','body','price','camera','adress','email','phone','brand','model','regdate','issuance_date','mileage','fuel','gearbox','cubic_capacity','good','square','rooms','energy_rage','ges','furnished','fashion_type','fashion_st','fashion_category','fashion_brand','fashion_color','fashion_condition','enable', 'update_at'
    ];

}
