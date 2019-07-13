<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Particular;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function userLogin(Request $request)
    {     
      
      $condition  = array('email' => $request->email, 'password' => md5($request->password));
      // echo json_encode(array('result' => $condition));
      // exit;
      $exist_check=Particular::where($condition)->count();
  
      if($exist_check>0)
      {
        echo json_encode(array('error'=> false, 'result' => "Login successfully."));
      }
      else{
        echo json_encode(array('error'=> true, 'result' => "Login failed"));
      }
  
    }
}
