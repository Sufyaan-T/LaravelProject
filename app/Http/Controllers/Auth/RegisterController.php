<?php

namespace App\Http\Controllers\Auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
      

      $this->validate($request,[
          'name' => 'required|max:225',
          'email' => 'required|email|max:225',
          'keyprogramming' => 'required|max:225',
          "education" => 'required|max:225',
          'URLlinks' => 'required|max:225',
          'password' => 'required|confirmed',
      ]);

      User::create([
          'name' => $request->name,
          'email' => $request->email,
          'keyprogramming' => $request->keyprogramming,
          'education' => $request->education,
          'URLlinks' => $request->URLlinks,
          'password' => Hash::make($request->password),
          
      ]);


    auth()->attempt($request-> only('email', 'password'));
    return redirect()->route('dashboard');      
    }

}
