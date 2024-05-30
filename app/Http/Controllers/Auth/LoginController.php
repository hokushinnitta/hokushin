<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class LoginController extends Controller
{
    use AuthenticatesUsers;

       // ログイン後のリダイレクト先
       protected function authenticated(Request $request, $user)
       {
           if ($user->name === 'runfree_admin') {
               return redirect('/special-menu');
           } else {
               return redirect('/main-menu');
           }
       }

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // ログインユーザーに応じたリダイレクト先を設定
    protected function redirectTo()
    {
        if (auth()->user()->name == 'runfree_admin') {
            return '/special-menu';
        }

        return '/main-menu';
    }
    
    public function username()
    {
        return 'name';
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }
}
