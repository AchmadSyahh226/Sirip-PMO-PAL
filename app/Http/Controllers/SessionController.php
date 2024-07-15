<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        //
        return view("index");
    }

    function login(Request $request)
    {
        Session::flash('name', $request->name);
        $request->validate([
            'name'=>'required',
            'password'=>'required'
        ], [
            // Fill Out Message
            'name.required'=>'Username wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        $infologin = [
            'name'=>$request->name,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            //Authentication success
            return redirect('/project/select')->with('success','Login berhasil!');
        }else{
            //Authentication failed
            return redirect('session')->withErrors('Username/password tidak valid!');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('session')->with('success','Logout berhasil!');
    }
}
