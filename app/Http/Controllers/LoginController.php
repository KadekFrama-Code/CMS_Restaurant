<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
    	// dd($request->all());
    	if(Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password])){
    		return redirect('/produk');
    	}elseif(Auth::guard('user')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/produk');
        }
    	return redirect('/login');
    }

    public function logout(Request $request)
    {
    	if(Auth::guard('client')->check()){
            Auth::guard('client')->logout();
        }elseif(Auth::guard('user')->check()){
            Auth::guard('user')->logout();
        }
    	return redirect('/');
    }
}
