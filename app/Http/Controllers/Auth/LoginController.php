<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Session;
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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        if ($validator->fails()) {
            return response()->json(['failed' => $validator->errors()]);
        }
        $data = DB::table('users')->where('email',$request->email)->first();
        if ($data) {
           $access_group = DB::table('users')->leftjoin('access_groups','users.id_group','=','access_groups.id')->select('group_access')
           ->first()->group_access;
           $access = json_decode($access_group);

           $this->validateLogin($request);
           if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return response()->json(['successs' => 'Success Login']);
        }
        $this->incrementLoginAttempts($request);
        return response()->json(['password' => 'Wrong Password']);
    }else{
            return response()->json(['email' => 'email Not Registered']);
        }

    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }  
}
