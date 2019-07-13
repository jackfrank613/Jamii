<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Eloquent\Collection;
use App\DetailedCategory;
use App\SubCategory;
use Illuminate\Http\Request;
use Validator;

class DetailedCategoryController extends BaseController
{
   
    public function addSelectCategory()
    {
      $data=$_POST;
      $input_categoryType=array(
         'sub_id'=>$data['sub_id'],
         'adName'=>$data['adName'],
         'adType'=>$data['adType'],
      );
    //   echo json_encode(array('result'=>$input_categoryType['sub_id']));
    //   exit;
      
      $id=DetailedCategory::insertGetId($input_categoryType); 
      $sub_result=SubCategory::where("sub_id", "=", $data['sub_id'])->first()->toArray();
      // echo json_encode(array('result'=>$id));
      // exit;
      if($id>0)
      {
        if($sub_result['option'] !="")
        {
        $returnHTML = view('categories.'.$sub_result['option'])->render();
        // print_r($returnHTML);
        return response()->json( array('error' => false, 'result'=>$returnHTML,'id'=>$id) );
        }
        else{
          echo json_encode(array('error'=>false,'result'=>'next_view','id'=>$id));
          exit;
        }

      }
      else{
         echo json_encode(array('error'=>true,'result'=>'Error'));
      }
    }

    public function addDescriptionCategory()
    {
      $data=$_POST;
      // $input_categoryDescription=array(
      //   'subject'=>"this is seller",
      //   'body'=>"very good",
      //   "id" => '139',
      // );
     $result= DetailedCategory::where('id',$data['id'])->update($data);
      // DB::table('admobsite_detail')->where('id',113)->update($input_categoryDescription);
      if($result ==1)
      {
        echo json_encode(array('error'=>false,'result'=>$result));
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"Error"));
      }
     
    }

    public function addPriceCategory(){
          
      $data=$_POST;
      $result= DetailedCategory::where('id',$data['id'])->update($data);

      if($result ==1)
      {
        echo json_encode(array('error'=>false,'result'=>$result));
      }
      else{
        echo json_encode(array('error'=>true,'result'=>"Error"));
      }
     
    
    }

    public function addPictureCategory(Request $request){
      
      // $FILES=$_FILES["image"];
      
      $upload_dir = storage_path('images/');
      // $file_local =  $_FILES["select_file"];
      $image = $request->file('select_file');
      
      $extension = strtolower($image->getClientOriginalExtension());
      // print_r($upload_dir);exit;
      if($extension == 'jpg' || $extension == 'png' || $extension == 'jpeg'){
        // $name=$image->getClientOriginalName();
        $name = time().'.'.$image->getClientOriginalExtension();
        $image->move($upload_dir, $name);
        // $path = $file_local->storeAS($upload_dir,$name);
        // $this->save();
        echo json_encode(array('error' => false, 'result'=>$name));
        exit;
      }else {
        echo json_encode(array('error' => true, 'result'=> "File extension is wrong, it must be .jpg, .png, .jpeg"));
        exit;
      }       
      
    }

}
