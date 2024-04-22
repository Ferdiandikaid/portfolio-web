<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    public function registration(Request $request){
        $user=new \App\Models\User;
        $user->username=$request->username;
        $user->password=\Hash::make($request->password);
        $user->save();

        return response()->json(["status"=>$user]);
    }   

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function authenticate(Request $request ){
        if(Auth::attempt(
            [
                'username'=>$request->username,
                'password'=>$request->password
            ]
        )){
            return redirect('homepage');
        }else{
            return redirect()->back()
            ->withErrors(['message' => 'User not found'])->withInput();
        }
    }
}