<?php

// namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

// class LoginController extends Controller
// {
//     public function index(){
//         $title = "login";
//         return view('auth.login',compact(
//             'title',
//         ));
//     }

//     public function login(Request $request){
//         $this->validate($request ,[
//             'email'=>'required|email',
//             'password'=>'required',
//         ]);
//        $authenticate = auth()->attempt($request->only('email','password'));
//        if (!$authenticate){
//            return back()->with('login_error',"Invalid user credentials");
//        }

//        return redirect()->route('dashboard');
//     }
// }

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function index(){
        $title = "login";
        return view('auth.login',compact(
            'title',
        ));
    }

    public function login(Request $request){
        $this->validate($request ,[
            'email'=>'required|email',
            'password'=>'required',
        ]);
       $authenticate = auth()->attempt($request->only('email','password'));
       if (!$authenticate){
           return back()->with('login_error',"Invalid user credentials");
       }

       return redirect()->route('dashboard');
    }
}
